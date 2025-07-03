<?php

function optionmenu(){
    echo "Options \n";
    echo "Enter: \n";
    echo "1 - Type of view \n";
    echo "2 - Memory status \n";
    echo "0 - previous menu \n";
}
function common(){
    echo "Enter: \n";
    echo "1 - Delivery reports \n";
    echo "2- Reply via same center \n";
    echo "3 - character support \n";
    echo "0 - previous menu \n";
}
function messagesettingset1input(){
   echo "Enter: \n";
    echo "1 - Message center number \n";
    echo "2 - Message sent as \n";
    echo "3 - Message validity \n";
    echo "0 - previous menu \n"; 
}
function callcostsetting(){
    echo "call cost settings \n";
    echo "Enter: \n";
    echo "1- call cost limit \n";
    echo "2- Show cost in \n";
    echo "0 - previous menu \n";
}
function callcosts(){
    echo "show call cost \n";
    echo "Enter: \n";
    echo "1- Last call cost \n";
    echo "2- All call cost \n";
    echo "3- Clear counter \n";
    echo "0 - previous menu \n";
}
function callregistermenu(){
    echo "call register \n";
    echo "Enter: \n";
    echo "1- Missed calls \n";
    echo "2- Received calls \n";
    echo "3- dailled calls \n";
    echo "4-  Erase Recent call list \n";
    echo "5- show call duration \n";
    echo "6- show call cost \n";
    echo "7- call cost settings \n";
    echo "8- prepaid credit \n";
    echo "0 - previous menu \n";  
}
function calldurationmenu(){
    echo "show call duration \n";
    echo "Enter: \n";
    echo "1- Last call duration \n";
    echo "2- All calls duration \n";
    echo "3- Received call duration \n";
    echo "4- Dailled call duration \n";
    echo "5- clear timers \n";
    echo "0 - previous menu \n";
}
function messagemenu(){
    echo "Message \n";
    echo "Enter: \n";
    echo "1 - write message \n";
    echo "2 - inbox \n";
    echo "3 - out \n";
    echo "4 - Picture messages \n";
    echo "5 - Templates \n";
    echo "6 - simleys \n";
    echo "7 - Message settings \n";
    echo "8 - Info service \n";
    echo "9 - Voice mailbox number \n";
    echo "10 - service command editor \n";
    echo "0 - previous menu \n";
}
function messagesettingset1menu(){
    echo "Enter: \n";
    echo "1 - Message center number \n";
    echo "2 - Message sent as \n";
    echo "3 - Message validity \n";
    echo "0 - previous menu \n";
      
}
function messagesettinginput(){
    echo "Message settings \n";
    echo "Enter: \n";
    echo "1 set 1 \n";
    echo "2- common \n";
    echo "0 - previous menu \n"; 
}
function phonebookmenu(){
    echo "Phone Book \n";
        echo "Enter: \n";
        echo "1 - Search \n";
        echo "2 - Service No \n";
        echo "3 - Add me \n";
        echo "4 - Erase \n";
        echo "5 - Edit \n";
        echo "6 - Assign tone No \n";
        echo "7 - Assign b card \n";
        echo "8 - Options \n";
        echo "9 - Speed dail \n";
        echo "10 - Voice tags \n";
        echo "0 - previous menu \n";
}
function chatmenu(){
    echo "Enter: \n";
    echo "chats \n";
    echo "0- previous \n";
}
function menu(){

    echo "Menu \n";
    echo "Enter : \n";
    echo "1 - phone book \n";
    echo "2 - Message \n";
    echo "3 - chat \n";
    echo "4 - call register \n";


    $menuInput = readline("input: ");
    if($menuInput === "1"){
        
        echo phonebookmenu();
    
        
        $menuInput = readline("input: ");
        if($menuInput==="0"){
            echo menu();
        }
        elseif($menuInput === "8"){
            echo optionmenu();

            $menu8=readline("input: ");
            if($menu8==="0"){
                echo phonebookmenu();
            }   
        }
        
        $menu8previous=readline("input: ");
        if($menu8previous==="0"){
            echo menu(); 
        }      
   
    }
     
  
    elseif($menuInput === "2"){
        echo messagemenu();

         $messagesettinginput = readline("input: ");
        if($messagesettinginput === "0"){
            echo menu();
        }
        elseif($messagesettinginput === "7"){
        echo messagesettinginput();       
        }
        
        $messagesettingset1input=readline("input: ");
        if($messagesettingset1input==="1"){
        echo messagesettingset1input();
        $messagesettingset1previous=readline("input: ");
        if( $messagesettingset1previous==="0"){
            echo messagesettinginput();
        $back=readline("input: ");
        if($back==="0"){
            echo messagemenu();
        }
        }
        
        }
        elseif($messagesettingset1input==="2"){
            echo common();
            $messagesettingset2=readline("input: ");
            if($messagesettingset2==="0"){
                echo messagesettinginput();
             $back2=readline("input: ");
            if($back2==="0"){
            echo messagemenu();
            }
            }
    
        }
    
        elseif($messagesettingset1input==="0"){
            echo messagemenu();
        }
        $memu7previous=readline("input: ");
        if( $memu7previous==="0"){
            echo menu();
        } 


        $messagesettingset1inputprevious=readline("input: ");
        if($messagesettingset1inputprevious==="0"){
            echo messagesettinginput();
        }
        $messagesettingprevious=readline("input: ");
        if($messagesettingprevious==="0"){
            echo messagemenu();
        }
        $messagemenuprevious=readline("input: ");
        if($messagemenuprevious==="0"){
            echo menu();
        }

        elseif($messagesettingset1input==="0"){
        echo messagemenu();
        }
        elseif($messagesettingset1input==="2"){
            echo common();
        
        }
        $commonprevious=readline("input: ");
        if($commonprevious==="0"){
            echo messagesettinginput();
        }

    }


    elseif($menuInput==="3"){
        echo chatmenu();
    $back3=readline("input: ");
    if($back3==="0"){
        echo menu();
    }
    }

    elseif($menuInput==="4"){
        echo callregistermenu();


    $callregister=readline("input: ");
    if($callregister==="5"){
        echo callcostsetting();
        $back5=readline("input: ");
        if($back5==="0"){
        echo callregistermenu();
    $callregisterprevious5=readline("input:");
    if($callregisterprevious5==="0"){
        echo menu();
    }
    }
    }

    elseif($callregister==="6"){
        echo calldurationmenu();
         $back6=readline("input: ");
    if($back6==="0"){
        echo callregistermenu();
    $callregisterprevious6=readline("input:");
    if($callregisterprevious6==="0"){
        echo menu();
    }
    }
    }

    elseif($callregister==="7"){
        echo callcosts();
    $back7=readline("input: ");
    if($back7==="0"){
        echo callregistermenu();
    $callregisterprevious7=readline("input:");
    if($callregisterprevious7==="0"){
        echo menu();
    }
    }
    }
    
    elseif($callregister==="0"){
        echo menu();
    }

    }
    else{
    echo "invalid \n";
    $menuInput = readline("input: ");
    echo menu();

    }
   
}                 

menu();
