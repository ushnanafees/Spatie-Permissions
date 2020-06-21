<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;
use App\SalesFunnelModel;
use App\AddSalesFunnelModel;
use App\User;

use Session;
use Crypt;

class SalesFunnelController extends Controller
{

    public function index()
    {

            return view('/');

                //---------- Create Role and Permissions --------------
       Role::create(['name' => 'salesman']);
      //$permission =  Permission::create(['name' => 'salesman_permission']);

//           $role = Role::findById(1);
//           $role->givePermissionTo('salesman_permission');
        return User::role('salesman')->get();
        //return User::permission('salesman_permission')->get();
        // --------- Remove Permissions Code ------------------
//        $role->revokePermissionTo($permission);
//        $permission->removeRole($role);

        $user = new User;
        //$user->givePermissionTo('salesman_permission');
        $user->assignRole('salesman');

        //$role->givePermissionTo($permission);

    }

    function add_orders(Request $req)
    {
        $add = new SalesFunnelModel;
        $add->po_number = $req->input('po_number');
        $add->client_name = $req->input('client_name');
        $add->value = $req->input('value');
        $add->date = $req->input('date');
        //user_id bh aygi (login user)
        $add->save();
        $req->session()->flash('status', 'Order added succesfully');
        return redirect('/add_orders');

    }

    function view_sales(Request $req) {

        $data = SalesFunnelModel::select(SalesFunnelModel::raw('SUM(value) as value'))->get();



        $show_rev = AddSalesFunnelModel::select(AddSalesFunnelModel::raw('SUM(rev) as rev'))->get();
        $show_funnel = AddSalesFunnelModel::all();

//        $month = SalesFunnelModel::select('date', SalesFunnelModel::raw('SUM(value) as value'))
//            ->groupBy('date')
//            ->get();

        $month = SalesFunnelModel::select( SalesFunnelModel::raw('SUM(value) as value'),
            SalesFunnelModel::raw("DATE_FORMAT(date,'%M %Y') as months"))
            ->whereMonth('date',date('m'))
            ->groupBy('months')
            ->orderBy('months','DESC')
            ->get();

        $year = SalesFunnelModel::select(
            SalesFunnelModel::raw('SUM(value) as value'),
            SalesFunnelModel::raw("DATE_FORMAT(date, '%Y') as years")
        )
            ->whereYear('date', date('Y'))
            ->groupBy('years')
            ->orderBy('years', 'ASC')
            ->get();

//        $quarter = SalesFunnelModel::select(SalesFunnelModel::raw('count(id) as `data`'),SalesFunnelModel::raw('YEAR(date) year'),SalesFunnelModel::raw('MONTH(date) month'))
//            ->groupBy(SalesFunnelModel::raw('YEAR(date)'), SalesFunnelModel::raw('MONTH(date)'))
//            ->get();



        return view('dashboard', compact('data', 'list', 'month', 'year', 'show_rev', 'show_funnel', 'user'));
    }


//    function view_ae(Request $req) {
//
//        $list = AddSalesFunnelModel::select(AddSalesFunnelModel::raw('SUM(ae) as ae'))->get();
//        return view('dashboard', compact('list'));
//    }

    function add_funnel(Request $req)
    {
        $addfunnel = new AddSalesFunnelModel;
        $addfunnel->ae = $req->input('ae');
        $addfunnel->customer = $req->input('customer');
        $addfunnel->lineofbusiness = $req->input('lineofbusiness');
        $addfunnel->quantity = $req->input('quantity');
        $addfunnel->rev = $req->input('rev');
        $addfunnel->base_stretch = $req->input('base_stretch');
        $addfunnel->probability = $req->input('probability');
        $addfunnel->city = $req->input('city');
        $addfunnel->opening_quarter = $req->input('opening_quarter');
        $addfunnel->opening_week = $req->input('opening_week');
        $addfunnel->closing_quarter = $req->input('closing_quarter');
        $addfunnel->closing_week = $req->input('closing_week');
        $addfunnel->remarks = $req->input('remarks');

        $addfunnel->save();
        $req->session()->flash('status', 'Order added succesfully');
        return redirect('/sales_funnel');

    }



//    function add_user(Request $req)
//    {
//
//        //---------- Create Role and Permissions --------------
//       //Role::create(['name' => 'admin']);
//      //$permission =  Permission::create(['name' => 'salesman_permission']);
//
////           $role = Role::findById(1);
////           $role->givePermissionTo('salesman_permission');
//        return User::role('admin')->get();
//        return User::permission('salesman_permission')->get();
//        // --------- Remove Permissions Code ------------------
////        $role->revokePermissionTo($permission);
////        $permission->removeRole($role);
//
//        $user = new User;
//        //$user->givePermissionTo('salesman_permission');
//        //$user->assignRole('admin');
//
//        //$role->givePermissionTo($permission);
//
//
//        $user->name = $req->input('name');
//        $user->email = $req->input('email');
//        $user->password = Crypt::encrypt($req->input('password'));
//        $user->role = $req->input('role');
//        $user->position = $req->input('position');
//        $user->office = $req->input('office');
//
//        $user->save();
//        $req->session()->put('user', $req->input('name'));
//        return redirect('add_user');
//
//
//    }

    function view_user(Request $req)
    {
        $data = User::all();


//        //---------- Create Role and Permissions --------------
//        Role::create(['name' => 'salesman']);
//        //$permission =  Permission::create(['name' => 'salesman_permission']);
//
////           $role = Role::findById(1);
////           $role->givePermissionTo('salesman_permission');
//        return User::role('salesman')->get();
//        //return User::permission('salesman_permission')->get();
//        // --------- Remove Permissions Code ------------------
////        $role->revokePermissionTo($permission);
////        $permission->removeRole($role);
//
//        $user = new User;
//        //$user->givePermissionTo('salesman_permission');
//        $user->assignRole('salesman');
//
//        //$role->givePermissionTo($permission);
//
        return view('view_salesperson', ['data' => $data]);
  }


    function login(Request $req)
    {

        $user = User::where("email", $req->input('email'))->get();
        if (Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
            $req->session()->put('user', $user[0]->name);
            return redirect('dashboard');
        }
//        $req->session()->put('data', $req->input());
//        return redirect('dashboard');
    }

    function logout(Request $req)
    {
//        $req->session()->flush('$user');
        $req->session()->forget('data', $req->input());
        return redirect('login');

    }

}


