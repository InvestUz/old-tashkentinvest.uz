<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $news = News::orderBy('published_at', 'desc')->get();
        $subcategory = Category::where('slug', 'stroitelnye-investicionnye-proekty')->first();
        return view('pages.frontend.home', compact('news','subcategory'));
    }

    
    public function about(){
        return view('pages.frontend.about');
    }
    public function rukavodstva(){
        return view('pages.frontend.rukavodstva');
    }
    public function search(){
        return view('pages.frontend.search');
    }
    public function investoram(Request $request, $subcategory = null)
    {
        // Retrieve category by slug (optional)
        $category = Category::where('slug', $subcategory)->first();
    
        // Get status from request and validate it
        $validStatuses = ['1_step', '2_step', 'completed', 'archive'];
        $status = in_array($request->status, $validStatuses) ? $request->status : null;
    
        // Fetch projects with filters
        $projects = Project::when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->when($request->q, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('district', 'LIKE', '%' . $search . '%')
                        ->orWhere('land', 'LIKE', '%' . $search . '%')
                        ->orWhere('mahalla', 'LIKE', '%' . $search . '%');
                });
            })
            ->get();
    
        return view('pages.frontend.investoram', compact('category', 'projects'));
    }
    
    
 
    public function media(){
        return view('pages.frontend.media');
    }
    public function contact(){
        return view('pages.frontend.contact');
    }
    public function ustav(){
        return view('pages.frontend.ustav');
    }
    public function struktura(){
        return view('pages.frontend.struktura');
    }
    public function supervisory_board(){
        return view('pages.frontend.supervisory-board');
    }
    public function board(){
        return view('pages.frontend.board');
    }
    public function decision(){
        return view('pages.frontend.decision-on-the-initial-issue');
    }
    public function reports(){
        return view('pages.frontend.reports');
    }
    public function balance(){
        return view('pages.frontend.balance');
    }
    public function income(){
        return view('pages.frontend.income');
    }
    public function spisok(){
        return view('pages.frontend.spisok');
    }
    public function share_struktura(){
        return view('pages.frontend.share-sturukture');
    }
    public function kodeks(){
        return view('pages.frontend.kodeks');
    }
}
