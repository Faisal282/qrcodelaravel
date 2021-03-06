<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Cek</title>
    <style>
        /* @import url(https://fonts.googleapis.com/css?family=Montserrat); */
body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  font-family: Montserrat;
  background: #313E50;
}

.text-input {
  position: relative;
  margin-top: 50px;
}
.text-input input[type="text"] {
  display: inline-block;
  width: 500px;
  height: 40px;
  box-sizing: border-box;
  outline: none;
  border: 1px solid lightgray;
  border-radius: 3px;
  padding: 10px 10px 10px 100px;
  transition: all 0.1s ease-out;
}
.text-input input[type="text"] + label {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 40px;
  line-height: 40px;
  color: white;
  border-radius: 3px 0 0 3px;
  padding: 0 20px;
  background: #E03616;
  -webkit-transform: translateZ(0) translateX(0);
          transform: translateZ(0) translateX(0);
  transition: all 0.3s ease-in;
  transition-delay: 0.2s;
}
.text-input input[type="text"]:focus + label {
  -webkit-transform: translateY(-120%) translateX(0%);
          transform: translateY(-120%) translateX(0%);
  border-radius: 3px;
  transition: all 0.1s ease-out;
}
.text-input input[type="text"]:focus {
  padding: 10px;
  transition: all 0.3s ease-out;
  transition-delay: 0.2s;
}

    </style>
</head>

<body>
    <form action="cek" method="post">
        <div class="text-input">
            @csrf
            <input type="text" id="input1" name="barcode" placeholder="Masukkan Barcode" autofocus>
            <label for="input1">BARCODE</label>
            <input type="submit" value="submit">
        </div>
    </form>
</body>

</html>
