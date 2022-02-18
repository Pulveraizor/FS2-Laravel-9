<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @include('Partials.header')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <form>
                    <h4 class="contact1-form-title">
                        Get in touch
                    </h4>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="">Your Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="">Email</span>
                        <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="">Subject</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave your message here" id="" style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="btn btn-secondary">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('Partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
