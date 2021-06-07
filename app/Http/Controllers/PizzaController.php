<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Order;
use Symfony\Component\HttpFoundation\Request;

class PizzaController extends Controller{

    // admin add pizza example
    public function create(Request $request){
        $pizza = Pizza::create([ // putting data from inputs in an object
            'name' => request('name'),
            'price' => request('price'),
            'ingradients' => request('ingradients'),
        ]);
        if($pizza){
            return back() -> with('message', 'pizza added successfully'); // send message with redirect
        } 
        return abort(403);
    }


    // show pizza catalogue in page
    public function show(){
        $catalogue = Pizza::get(); // get data from db
        return view('add_pizza', ['catalogue' => $catalogue]); // send data to add_pizza page
    }



    // user ordering a pizza
    public function order(Request $request){

        if($request-> has('pizza_id')){  // check if checkbox clicked    
            $order = Order::create([    // putting data from inputs in an object
                'name' => request('name'),                 // whom to delever
                'adress' => request('adress'),             // where to delever
                // 'pizza_id' => json_encode(request('pizza_id')),
                'pizza_id' => json_encode(array_diff(request('count'),[0])), // pizza id and count from form to db(arr->delete 0s->string)
                //model, takeFromInput, inputNameField            
            ]);
                
            // Choose pizzas info  
            foreach (request('pizza_id') as $item) {
                $chosen[] = Pizza::findOrFail($item); // Find in Pizza model ordered pizza id                   
            }

            
            foreach(json_decode($order->pizza_id) as $pizzaCount){
                // total price of order
                $total = 0;           
                foreach($chosen as $prod){
                    $total = ($total + ($prod->price) * $pizzaCount); 
                }
            }   

            // send order data with redirect 
            return view('ordered', ['order' => $order, 'chosen' => $chosen, 'total' => $total+($total/2)]); // count taxes 50%  
        }
        
        else{ // if checkbox doesn't clicked
            return abort(403); // send error message with redirect
        }      
    
    }
}

