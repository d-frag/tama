<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sign in</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .hero {
    background: url('img/bg.jpg') no-repeat center center;
    background-size: cover;
  }
  </style>
</head>

<body>
  <main>
    <div class="hero is-fullheight is-bold">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-mobile is-vcentered">
            <div class="column is-8-mobile is-offset-2-mobile is-6-tablet is-offset-3-tablet is-4-desktop is-offset-4-desktop">
              <div class="box">
                <form action="ldap.php" method="POST">
                  <h1 class="title has-text-centered">多摩</h1>
                  <p class="control has-icon">
                    <input type="text" name="username" placeholder="Username" class="input">
                    <span class="icon is-small">
                      <i class="fa fa-user-o"></i>
                    </span>
                  </p>

                  <p class="control has-icon">
                    <input type="password" name="password" placeholder="Password" class="input">
                    <span class="icon is-small">
                      <i class="fa fa-lock"></i>
                    </span>
                  </p>

                  <p class="control">
                    <button type="submit" class="button is-info is-medium is-fullwidth">Login</button>
                  </p>

                  <p class="control">
                    <button type="reset" class="button is-default is-medium is-fullwidth">Cancel</button>
                  </p>
                </form>
              </div>
            </div>’
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
