<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Triangulo Rectangulo</title>
  </head>
  <body>
    <header>
        <h1>Calcular la Hipotenusa de un Triangulo Rectangulo</h1>
    </header>
    <div class="container">

      <!--<h2>(Hipotenusa)2 = (Cateto a)2 + (Cateto b)2</h2>-->
      <h2>(c)2 = (a)2 + (b)2</h2>
      <br><br>
        <form action="{{ route('result.hipotenusa') }}" method="post"> 
        @csrf
            <div class="form-group">
                <label for="cateto_a">Cateto a</label>
                <input class="form-control" type="number" name="cateto_a" id="cateto_a" placeholder="introduce el primer cateto numero">
            </div>
            <div class="form-group">
                <label for="cateto_b">Cateto b</label>
                <input class="form-control" type="number" name="cateto_b" id="cateto_b" placeholder="introduce el segundo cateto numero">
            </div>
            <button class="btn btn-secondary">Calcular la Hipotenusa</button>
        </form>
    
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>