<?php  
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\User;
use App\Models\Reservation;
class ReservationController extends Controller 
 
{  
    /** 
     * Display a listing of the resource. 
     * @return \Illuminate\Http\Response 
     */  
public function index()  
{  
          
//  
      
}  
/** 
     * Show the form for creating a new resource. 
     * @return \Illuminate\Http\Response 
       
*/  
 public function create()  
{  
          
//  
      
}  
/** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */  
public function store(Request $request, $id)  
{  
     $teacher = User::find($id);
     $reservation = new Reservation;
     $reservation ->teacher_id = $id;
     $reservation ->student_id = Auth::user()->id;
     $reservation ->price = $teacher->price * $request->month;
     $reservation ->first_price = $teacher->price;
     $reservation ->month = $request->month;
     $reservation ->desc = $request->desc;
     // $reservation ->status = $id;
     $reservation->save();
     return redirect('../profile/main');
}  
/** 
     * Display the specified resource. 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
public function show($id)  
{  
  
  //  
}  
/** 
     * Show the form for editing the specified resource. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */  
 public function edit($id)  
{  
          
//  
      
}  
/** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
 public function update(Request $request, $id)  
{  
          
//  
      
}  
/** 
     * Remove the specified resource from storage. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */  
 public function destroy($id)  
 {  
          
}

}