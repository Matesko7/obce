   <nav class="navbar navbar-expand-md navbar-light bg-light rounded">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	  		
	  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">O nás<span class="sr-only">(current)</span></a>
          </li>
          <li class="{{Request::is('/')?'active': ''}}">
            <a class="nav-link" href="/">Zoznam miest</a>
          </li>
          <li class="{{Request::is('about')?'active': ''}}">
            <a class="nav-link" href="/">Inšpekcia</a>
          </li>
		  <li class="{{Request::is('contact')?'active': ''}}">
            <a class="nav-link" href="/">Kontakt</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
			<span style="color:#0978F0;padding-right:30px;"><b>Kontakty a čísla na oddelenia<b></span>
			<span style="color:#C0C0C0;padding-right:15px;">EN▼</span>
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" style='background-color:#07D3A9;color:white;' type="submit">Prihlásenie</button>
        </form>
      </div>
    </nav>