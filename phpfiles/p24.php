<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <style>
      a.one:link {
        color: #ccc;
      }
      a.one:visited {
        color: #095484;
      }
      a.one:hover {
        color: #8ebf42;
      }
      a.two:link {
        color: #ccc;
      }
      a.two:visited {
        color: #095484;
      }
      a.two:hover {
        font-size: 150%;
      }
      a.three:link {
        color: #ccc;
      }
      a.three:visited {
        color: #095484;
      }
      a.three:hover {
        background: #8ebf42;
      }
      a.four:link {
        color: #ccc;
      }
      a.four:visited {
        color: #095484;
      }
      a.four:hover {
        font-family: monospace;
      }
      a.five:link {
        color: #095484;
        text-decoration: none;
      }
      a.five:visited {
        color: #095484;
        text-decoration: none;
      }
      a.five:hover {
        text-decoration: overline underline;
      }
    </style>
  </head>
  <body>
    <p>Mouse over the links and watch how they will be changed:</p>
    <p>
      <a class="one" href="#">This link changes color</a>
    </p>
    <p>
      <a class="two" href="#">This link changes font-size</a>
    </p>
    <p>
      <a class="three" href="#">This link changes background-color</a>
    </p>
    <p>
      <a class="four" href="#">This link changes font-family</a>
    </p>
    <p>
      <a class="five" href="#">This link changes text-decoration</a>
    </p>
  </body>
</html>
