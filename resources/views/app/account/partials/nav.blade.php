<ul class="list-group">
    <a href="/app/account"  class="list-group-item text-dark bg-very-light-blue-alt-when-active  bg-very-light-blue-when-hovering {{ Request::is('app/account') ? 'active' : '' }}"><i class="material-icons mr-3">person</i>Profile</a>
    <a href="/app/settings"  class="list-group-item text-dark bg-very-light-blue-alt-when-active bg-very-light-blue-when-hovering {{ Request::is('app/settings/*') ? 'active' : '' }}"><i class="material-icons mr-3">settings</i>Settings</a>
    <a href="/app/payment"  class="list-group-item text-dark bg-very-light-blue-alt-when-active bg-very-light-blue-when-hovering {{ Request::is('app/payment') ? 'active' : '' }}"><i class="material-icons mr-3">credit_card</i>Payments</a>
    <a href="/app/subscriptions"  class="list-group-item bg-very-light-blue-alt-when-active text-dark bg-very-light-blue-when-hovering {{ Request::is('app/subscriptions*') ? 'active' : '' }}"><i class="material-icons mr-3">subscriptions</i><span class="d-none d-lg-inline-block d-md-none d-sm-none ">Subscriptions</span><span class="d-md-inline-block d-lg-none">Plans</span></a>
</ul>