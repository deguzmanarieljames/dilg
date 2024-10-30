<template>
    <div id="app" style="background-image: url('./img/good.png'); background-size: cover; background-attachment: fixed;">
      <main>
        <div class="container">
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                  <div class="text-center py-2">
                    <img src="./img/new.png" alt="" style="width: 180px; height: 180px;">
                  </div>
                  <div class="text-center pt-4 pb-2">
                    <h1 style="font-family:'Arial Narrow'; color: rgb(10, 53, 100); font-size: 75px;">Welcome!</h1>
                    <p class="subtitle" style="text-align: center; font-size: 15px; font-family: Calibri; font-style: italic; margin-top: 20px;">
                      Success is found in optimizing supplies and equipment usage, and it all starts with your commitment to efficiency and excellence in inventory management.
                    </p>
                  </div>
                  <div class="d-flex justify-content-center mt-4">
                    <a href="signin" class="btn btn-primary px-4 me-2" type="submit" style="border-radius: 30px; border-color: rgb(25, 52, 99); background-color: rgba(255, 255, 255, 0);">Sign in</a>
                    <a href="signup" class="btn btn-secondary px-4 ms-2" type="submit" style="border-radius: 30px; border-color: rgb(25, 52, 99); color:white; background-color: rgba(1, 37, 98, 0.738);">Sign up</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </template>
  
  <style scoped>
  .btn-primary:hover {
    color: rgb(0, 36, 59);
    box-shadow: 1px 7px 12px #345c8a;
  }
  
  .btn-secondary:hover {
    color: rgb(0, 36, 59);
    box-shadow: 1px 7px 12px #345c8a;
  }
  .subtitle {
    color: rgb(10, 53, 100);
  }
  </style>