@extends("theme")
@section("content")
      
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <table class="table table-borderless">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-warning">Submit</button></td>
                    </tr>
                </table>
            </div>
           
            
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    Read Down..
                   </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        About Username
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Username.</strong>A username is a name that uniquely identifies someone on a computer system. For example, a computer may be setup with multiple accounts, with different usernames for each account.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Password
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Password.</strong> Keep your passwords private – never share a password with anyone else.
                          Do not write down your passwords. 
                          Use passwords of at least eight (8) characters or more (longer is better).
                          Use a combination of uppercase letters, lower case letters, numbers, and special characters (for example: !, @, &, %, +) in all passwords.
                          Avoid using people’s or pet’s names, or words found in the dictionary; it’s also best to avoid using key dates (birthdays, anniversaries, etc.).
                          Substituting look-alike characters for letters or numbers is no longer sufficient (for example, “Password” and “P@ssw0rd”).
                          A strong password should look like a series of random characters.
                          On the web, if you think your password may have been compromised, change it at once and then check your other website accounts for misuse. At work, change your password at once, and then call your company’s IT Security help desk. 
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
   @endsection
