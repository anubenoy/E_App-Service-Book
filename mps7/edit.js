
            function err(){
                $(document).ready(function(){$('[data-toggle="popover"]').popover();});
            }
            
    
            function checkName()
            {
               
                elem=document.getElementById("name");
                x=document.getElementById("err1");
                patt=/^[a-zA-Z\. ]+$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
            
            function checkUserName()
            {
               
                elem=document.getElementById("username");
                x=document.getElementById("err2");
                patt=/^[a-zA-Z0-9$&+,:;=?@#|'<>.-^*()%!]+[0-9]+$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
    
            function checkEmail()
            {
               
                elem=document.getElementById("email");
                x=document.getElementById("err3");
                patt=/^([A-Za-z0-9\.]{4,30})+@[a-z.]+\.+[a-z]+$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
    
            
            function checkPassword()
            {
               
                elem=document.getElementById("password");
                x=document.getElementById("err4");
                patt=/^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
            function checkConfirmPass()
            {
               
                
                x=document.getElementById("err5");
                        
                if((document.getElementById("password").value)!=(document.getElementById("ConfirmPass").value))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
            function checkImage()
            {
               
                elem=document.getElementById("profile_pic");
                x=document.getElementById("err6");
                patt=/\.(jpe?g|png|JPE?G|PNG)$/;     
                if(!elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }     
            
                    
                            
            