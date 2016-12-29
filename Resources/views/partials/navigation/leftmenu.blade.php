
<div class='panel panel-default panel-menu'>
    <div class="panel-title">
          <div class="panel-heading">
              Company Menu
          </div>
    </div>
    <div class="panel-body">
        <div class='list-group'>
            <a class="{{ Menu::is('company.index', 'company.new') ? 'active' : '' }} list-group-item" href="{{ route('company.index') }}"> My Company </a>
            <a class="{{ Menu::is('company.joined') ? 'active' : '' }} list-group-item" href="{{ route('company.joined') }}"> My joined Comapnies </a>
            <a class="{{ Menu::is('company.created') ? 'active' : '' }} list-group-item" href="{{ route('company.created') }}"> My created Companies </a>
        </div>
    </div>
</div>
