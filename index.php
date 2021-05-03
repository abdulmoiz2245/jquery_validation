<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#form" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#file" role="tab" aria-controls="profile" aria-selected="false">File</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="home-tab">
            <div class="w-50 mx-auto mt-5">
                    <form id="form1">
                        <div id="error"  style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="success"  style="display: none;" class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="form-group">
                                <input type="text" id="receiving_address" name="receiving_address" placeholder="Receiving address"  class="form-control" title="Use legacy or P2SH-SegWit FTC address">
                                
                            </div>

                            
                            <div class="form-group">
                                <input type="text" id="nft_data" name="nft_data" placeholder="NFT data" max="255"  class="form-control height-100" title="Max 255 characters of data">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control" title="(Optional) for billing recipet">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree" class="mr-2"> <a href="terms.html"><label title="agree to terms">agree to terms</label></a>
                            </div>              
                            <div class="form-group">
                                <input type="checkbox"  id="displayonhome" name="dont_show_on_homepage" class="mr-2"> <label title="Prevent your NFT data being shown on home page">Don't show on homepage</label>
                            </div>
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" id="target" class="btn btn-primary submit" name="submit" value="Pay"/>
                    </div> 
                    </form>
            </div>
            
            <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="profile-tab">
                    <div id="success_file"  style="display: none;" class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form2" action="process1.php" method="post" class="text-center mt-5" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="myfile" id="">

                        </div>

                        <input type="submit" id="target" class="btn btn-primary submit" name="submit" value="Submit"/>
                    </form>
            
            </div>
            
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  

<script>
// $( "#target" ).click( async function() {

// var name = $("#nft_data" ).val();
// var receiving_address = $("#receiving_address" ).val();
// var email =  $("#email" ).val();

// var displayonhome = 0;
// if ($('#displayonhome').is(":checked"))
// {
//     displayonhome = 1;
// }

// if(name === "" || receiving_address === "" || email === ""){
//     if(receiving_address === ""){
//         $("#error").html('Please enter receiving address');
//         $("#error").show();
//     } 
//     else if(name === ""){
//         $("#error").html('Please enter nft data');
//         $("#error").show();
//     }else if(email === ""){
//         $("#error").html('Please enter email');
//         $("#error").show();

//     }
//     return false;
   
// }

// if(receiving_address[0] == '3' || receiving_address[0] == '6' || receiving_address[0] == '7'){
         
//         }
//         else{
//             $("#error").html('Please Start receiving address with  a 3 6 or 7.');
//             $("#error").show();
//             e.preventDefault();
//       return false;
// }


// });

// //for (let index = 0; index < receiving_address.value.length; index++) {
//     $( "#check" ).click( async function() {
       
//     }); 
    
//}

$(document).ready(function () {
    $("#form1").submit(function(e){
      console.log("a");
    var name = $("#nft_data" ).val();
    var receiving_address = $("#receiving_address" ).val();
    var email =  $("#email" ).val();

    var displayonhome = 0;
    if ($('#displayonhome').is(":checked"))
    {
        displayonhome = 1;
    }

    if(name === "" || receiving_address === "" || email === ""){
        if(receiving_address === ""){
            $("#error").html('Please enter receiving address');
            $("#error").show();
        } 
        else if(name === ""){
            $("#error").html('Please enter nft data');
            $("#error").show();
        }else if(email === ""){
            $("#error").html('Please enter email');
            $("#error").show();

        }
        return false;
    
    }

    if(receiving_address[0] == '3' || receiving_address[0] == '6' || receiving_address[0] == '7'){
         
    }
    else{
        $("#error").html('Please Start receiving address with  a 3 6 or 7.');
        $("#error").show();
        return false;

    }


    var formData = {
        name : $("#nft_data" ).val(),
        receiving_address : $("#receiving_address" ).val(),
        email :  $("#email" ).val(),
    };

    $.ajax({
      type: "POST",
      url: "process.php",
      data: formData,
      encode: true,
    }).done(function (data) {
      console.log(data);
      console.log(data);
            $("#success").html('sucessfully submit data');
            $("#success").show();
    });
   
  });

  $("#form2").submit(function(e){

        var form = $(this);
        $.ajax({
        type: "POST",
        url: "process1.php",
        data: new FormData( this ),
        processData: false,
      contentType: false
        }).done(function (data) {
            console.log(data);
            $("#success_file").html('sucessfully submit data');
            $("#success_file").show();
        });
        return false;
  });
});

</script>
</body>
</html>
