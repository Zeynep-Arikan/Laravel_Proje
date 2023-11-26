<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mb-5">
            <div class="d-flex justify-content-between">
                <h1>Add new Student</h1>
            </div>
        </div>
        <div class="col-md-12 mb-5">
            <form action="/students" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="last" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter your lastname">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" class="form-control" id="address" placeholder="Enter your address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="cgpa" class="form-label">CGPA</label>
                    <input type="text" name="cgpa" class="form-control" id="cgpa" placeholder="Enter your cgpa">
                </div>
                <a href="/students" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
