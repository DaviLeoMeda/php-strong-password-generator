<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Strong Password</title>
</head>
<body>
    <div class="bg-dark py-5">
        <header class="text-center text-white">
            <h1>
                Strong Password Generator
            </h1>
            <h3>
                Create your safe password
            </h3>
        </header>

        <div class="bg-info text-center container rounded-2 my-3">
            <h5 class="p-4">No valid parameters entered</h5>
        </div>

        <div class="bg-white container rounded-2">
            <div class="row justify-content-between m-3 py-4">
                <label class="col-3 " for="">Password Lenght:</label>
                <input class="col-3 rounded-1"  type="text">
            </div>

            <div class="row justify-content-between m-3 py-4">
                <label class="col-4 " for="">Allow repeatings of one or more characters:</label>
                <div class="col-3">

                    <div>
                        <label for="">Yes</label>
                        <input type="radio" name="repeat" id="repeatYes" value="repeatY">
                    </div>

                    <div>
                        <label for="">No</label>
                        <input type="radio" name="repeat" id="repeatNo" value="repeatN">
                    </div>
                    
                    <div class="my-3">
                        <section>
                            <input type="checkbox" name="words" id="words" value="words">
                        <label for="">Words</label>
                        </section>
                        <section>
                            <input type="checkbox" name="numbers" id="numbers" value="numbers">
                        <label for="">Numbers</label>
                        </section>
                        <section>
                            <input type="checkbox" name="symbols" id="symbols" value="symbols">
                        <label for="">Symbols</label>
                        </section>
                        
                    </div>
                </div>
            </div>

            <div class="m-3 py-4">
                <button class="btn btn-primary">Send</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
            

        </div>

    </div>

        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>