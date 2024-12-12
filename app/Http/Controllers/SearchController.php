<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private $districts = [
         1 => 'Учтепа тумани',
         2 => 'Бектемир тумани',
         3 => 'Чилонзор тумани',
         4 => 'Яшнобод тумани',
         5 => 'Яккасарой тумани',
         6 => 'Сергели тумани',
         7 => 'Юнусобод тумани',
         8 => 'Олмазор тумани',
         9 =>'Мирзо   Улуғбек тумани',
         10 => 'Шайхонтохур тумани',
         11 => 'Миробод тумани',
         12 => 'Янгиҳаёт тумани',
    ];

    public function search(Request $request)
    {
        $query = $request->input('query');
        $district = $request->input('district');
        $authUser = auth()->user();
    
        // Base query for product search
        $productQuery = Product::query()
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('yer_uchastkasi_raqami', 'like', "%{$query}%")
                                    ->orWhere('mahalla', 'like', "%{$query}%")
                                    ->orWhere('manzil', 'like', "%{$query}%")
                                    ->orWhere('maydoni', 'like', "%{$query}%");
            })
            ->when($district, function ($queryBuilder) use ($district) {
                return $queryBuilder->where('tuman', $district);
            });
    
        // Apply role-based filters
        if ($authUser->hasRole('Super Admin')) {
            // No additional filtering needed for Super Admin
            $products = $productQuery->orderByDesc('id')->paginate(15);
        } elseif ($authUser->hasRole('TumanHokimligi')) {
            // Show only products created by TumanHokimligi user
            $products = $productQuery->where('tuman_user_id', $authUser->id)
                ->orderByDesc('id')
                ->paginate(15);
        } elseif ($authUser->hasRole('Baholash')) {
            // Show only products evaluated by Baholash user
            $products = $productQuery->where('baholash_user_id', $authUser->id)
                ->orderByDesc('id')
                ->paginate(15);
        } else {
            // Default case if user has none of the specified roles
            $products = $productQuery->orderByDesc('id')->paginate(15);
        }
    
        return view('pages.search.index', [
            'products' => $products,
            'districts' => $this->districts,
            'productCount' => $products->count()
        ]);
    }
    
}
