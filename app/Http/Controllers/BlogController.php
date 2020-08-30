<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{


    /**
     * Show blog homepage.
     *
     * @return View
     */
    public function index()
    {
        $data = [
            'posts'  => WinkPost::with('tags')
                ->live()
                ->orderBy('publish_date', 'DESC')
                ->simplePaginate(12)
        ];

        return view('index', compact('data'));
    }


    /**
     * Show about blog.
     *
     * @return View
     */
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }


    /**
     * Show a post given a slug.
     *
     * @param string $slug
     * @return View
     */
    public function findPostBySlug(string $slug)
    {
        $posts = WinkPost::with('tags')
            ->live()->get();

        $post = $posts->firstWhere('slug', $slug);

        if (optional($post)->published) {
            
            $next = $posts->sortByDesc('publish_date')->firstWhere('publish_date', '>', optional($post)->publish_date);
            $prev = $posts->sortByDesc('publish_date')->firstWhere('publish_date', '<', optional($post)->publish_date);

            $data = [
                'author' => $post->author,
                'post'   => $post,
                'meta'   => $post->meta,
                'next'   => $next,
                'prev'   => $prev,
            ];

            return view('post', compact('data'));
        }

        abort(404);
    }



    /**
     * Update indexed articles.
     *
     * @return string
     */
    public function updateIndexedArticles()
    {
        $data = collect(WinkPost::live()
            ->orderBy('publish_date', 'DESC')
            ->get())->map(function ($item, $key) {
            return [
                "title" => $item->title,
                "link" => post_url($item->slug),
                "snippet" => $item->excerpt
            ];
        });

        $file_path = public_path('index.json');

        file_put_contents($file_path, $data->toJson());

        return "Indexed articles updated for live search";
    }
    // public function updateIndexedArticles()
    // {
    //     Artisan::call('generate:feed');
    //     Artisan::call('generate:index');
    //     return "rss feed and indexed articles generated succesfully";
    // }
    
    public function seeder()
    {
        $posts = $this->extractJsonData('posts.json');
        $author = $this->extractJsonData('author.json');
        $post_tags = $this->extractJsonData('post_tags.json');
        $tags = $this->extractJsonData('tags.json');
        $migerations = $this->extractJsonData('migerations.json');

        $this->insertData('wink_posts', $posts);
        $this->insertData('wink_authors', $author);
        $this->insertData('migrations', $migerations);
        $this->insertData('wink_tags', $tags);
        $this->insertData('wink_posts_tags', $post_tags);

    }

    private function insertData($table, $data)
    {
       return DB::table($table)->insert($data);
    }

    private function extractJsonData($filename)
    {
        $posts = file_get_contents(public_path($filename));

        $posts = json_decode($posts, true);

        return collect($posts['values'])->map(function ($item, $key) use ($posts) {
            return $item = collect($item)->map(function ($item_deep, $key_deep) use ($posts) {
                return  [$posts['fields'][$key_deep] => $item_deep];
            })->flatMap(function ($value) {
                return $value;
            })->toArray();
        })->toArray();
    }
}
