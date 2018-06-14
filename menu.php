
<nav class="navbar navbar-expand-lg  navbar-dark ">
  <div class="container">
    <a title='Tworzenie i wysyłanie pliku JPK' class="navbar-brand text-bold" href="./">faktury-vat.pl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNab" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <div class="navbar-nav d-flex justify-content-end w-100">
        <a title="Elektroniczna faktura "class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/faktury-elektroniczne')? 'active': '' ?>" href="/faktury-elektroniczne">Faktury elektroniczne</a>
        <a title="Program do tworzenia faktur"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/program-do-fakturowania')? 'active': '' ?>" href="/program-do-fakturowania">Program do fakturowania</a>
        <a title="Wystawianie dokumentów online"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/wystawianie-faktury-online')? 'active': '' ?>" href="/wystawianie-faktury-online">Wystawianie faktury online</a>
      </div>
    </div>
  </div>
</nav>
