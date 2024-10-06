<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\category;
class HomeController extends Controller
{
    function Home(){
        $tinmoinhatto = news::firstWhere('is_breaking_news', 1);
        $tinmoinhat = news::where('is_breaking_news', 1)->offset(1)->limit(8)-> get();
        $tinnoibat = news::orderBy('is_approved', 'desc')->limit(4)->get();
        return view('frontend.home', compact('tinmoinhat','tinmoinhatto','tinnoibat'));
    }
    function category(Request $rq){
        // var_export($rq->query());
        $news = news::query();
        $id = $rq->get('id');
        $ctgr=Category::find($id);
        $v ='ok';
        $news->when($rq->has('category') && !empty($rq->category), function($sql) use ($rq){
            $sql->whereHas('category', function($sql) use ($rq){
                $sql->where('slug', $rq->category);
            });
        });

        $news->when($rq->has('search'), function($sql) use ($rq){
            $sql->where(function($sql) use ($rq){
                $sql->where('title', 'like', '%'. $rq->search . '%')
                    ->orWhere('content', 'like', '%'. $rq->search . '%');
            })->orWhereHas('category', function($sql) use ($rq){
                $sql->where('name', 'like', '%'. $rq->search . '%');
            });
        });

        $news = $news->get();
        $ctgr = category::where('status', 1)->get();
        return view('frontend.category', compact('ctgr','news'));
    }
    public function show_detail($slug)
    {
        $detail = News::where('slug',$slug)->first();
        // $newsCategory = Category::findOrFail($detail->category_id);

        // if ($newsCategory->slug !== $category) {
        //     return abort(404); // Nếu danh mục không khớp, trả về 404
        // }

        return view('frontend.detail', [
            'detail' => $detail,
            // 'newsCategory' => $newsCategory
        ]);
    }

}
