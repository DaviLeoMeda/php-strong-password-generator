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
            <h5 class="p-4"><?php echo $password ?></h5>
        </div>

        <form class="bg-white container rounded-2" action="index.php" method="GET">

            <div class="row justify-content-between m-3 py-4">
                <label class="col-3 " for="">Password Lenght:</label>
                <input class="col-2 rounded-1"  type="number" name="lenght">
            </div>
            
            <div class="row justify-content-between m-3 py-4">
                <label class="col-4 " for="">Allow repeatings of one or more characters:</label>
                <div class="col-2">

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
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
            

        </form>

    </div>

        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>