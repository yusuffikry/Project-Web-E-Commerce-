<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;

use App\Models\Order;
use App\Models\User;

class SellerController extends Controller
{
    public function index()
    {
        if(auth()->user()->usertype=='2')
        {
            $users=User::all();

            return view('seller.userlist',compact('users'));
        }
    }

    public function updateuser(Request $request, $id)
    {
        $users=User::find($id);

        $users->update($request->all());

        return redirect()->route('userlist');
    }

    public function showuser($id)
    {
        $users=User::find($id);
        return view('seller.updateuser',compact('users'));
    }

    public function deleteuser($id)
    {

        $data=User::find($id);

        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted');
    }

}
