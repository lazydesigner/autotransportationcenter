<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{box-sizing: border-box;}
        html,body{
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        .form-div{
            width: 32%;
            margin: auto;
            padding: 1.5%;
            box-sizing: content-box;
            border-radius: 15px;
            background-color: #ffffff;
            position: relative;
            z-index: 1;
            
            /* backdrop-filter: blur(22px); */
            /* -webkit-backdrop-filter: blur(22px); */
        
        }
        .part1{ display:block;}
        .part2{ display: none;}
        .form-div label{color: rgb(27, 27, 27);font-size: large;margin-left: 5px;}
        .form-div h1{
            font-size: 2rem;
            text-align: center;
            font-weight: 800;
            color: rgb(28, 28, 28);
        }
        .form-group{margin: 15px 0;}
        .form-div input{
            width: 400px;
            height: 40px;
            border: 1px solid rgb(68, 68, 68);
            border-radius: 5px;
            padding: 1%;
            background-color: #ffffff10;
            outline: 0;
            color: rgb(18, 17, 17);
        }
        <!-- .form-div input:focus{
            background-color: rgba(255, 255, 255, 0.512)    ;
        }
        .form-div input:hover{
            background-color: rgba(255, 255, 255, 0.512)    ;
        } -->
        .form-div input[type=submit]{
            width: 150px;
            margin: 10px 0;
            cursor: pointer;
            margin: auto;
            text-align: center;
            color: rgb(21, 21, 21);
            font-weight: bolder;
        }
        ::placeholder{color:rgb(16, 16, 16);}
        .container{
            background-image: url('https://cdn.pixabay.com/photo/2017/08/17/05/59/peterbilt-2650184_1280.jpg');
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            position: relative;
        }
        .container-bg{
            width: 100%;
            height: 100%;
            background-color: rgba(18, 18, 18, 0.886);
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    


<div class="container">
    <div class="container-bg"></div>
    <div class="form-div">
        <h1><strong>Get A Free Quote</strong></h1>
        <form action="">

            <div class="part1" id="part1">
                <div class="form-group">
                    <label for="">From</label><br>
                    <input type="text" placeholder="Address or City" value="<?=$_GET['from'] ?>" id="ship_from" readonly>
                </div>
                <div class="form-group">
                    <label for="">To</label><br>
                    <input type="text" placeholder="Address or City" value="<?=$_GET['to'] ?>" id="ship_to" readonly>
                </div>
                <div class="form-group">
                    <label for="">Date OF Pickup</label><br>
                    <input type="date" placeholder="Pickup Date" id="ship_date">
                </div>
                <div class="form-group">
                    <label for="">Vehicle Size</label><br>
                    <input type="text" placeholder="Select an option" id="ship_vehicle">
                </div>
                <div class="form-group">
                    <label for="">Email</label><br>
                    <input type="email" placeholder="Enter Your Email" id="email">
                </div>
                <div class="form-group">
                    <label for="">Phone</label><br>
                    <input type="text" placeholder="Enter Your Phone" id="phone" min="10" onkeyup="formatPhoneNumber(this)" max="10" required>
                </div>
                <div class="form-group" style="text-align: center;margin:10px auto;">
                    <input type="submit" value="submit" id="next-step">
                </div>
            </div>

        </form>
    </div>
</div>




    <script>
        document.getElementById('quote').addEventListener('click',function(e){
            e.preventDefault();
            document.getElementById('part1').style.display = 'none';
            document.getElementById('part2').style.display = 'block';

        })
        document.getElementById('previous').addEventListener('click',function(e){
            e.preventDefault();
            document.getElementById('part2').style.display = 'none';
            document.getElementById('part1').style.display = 'block';

        })
        function formatPhoneNumber(input) {
            // Remove all non-digit characters from the input
            const phoneNumber = input.value.replace(/\D/g, '');

            // Apply the desired pattern (e.g., XXX-XXX-XXXX)
            if (phoneNumber.length <= 3) {
                input.value = phoneNumber;
            } else if (phoneNumber.length <= 6) {
                input.value = `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
            } else {
                input.value = `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3, 6)}-${phoneNumber.slice(6, 10)}`;
            }

            // Display the formatted phone number
            document.getElementById('formattedPhoneNumber').textContent = input.value;
        }
    </script>
</body>
</html>
