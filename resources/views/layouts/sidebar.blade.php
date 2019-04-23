<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="text-center">
                    <span class="text-center"><h4>{{ Auth::user()->name }}</h4></span>
                    {{ Auth::user()->email }}
                </div>
            </li>
            <li>
                <a href="{{ route('hero.index') }}" class="{{ menuActivator('hero.index') }}{{ menuActivator('hero.edit') }}"><i class="fa fa-laptop fa-fw"></i> Hero Header</span></a>
            </li>
            <li>
                <a href="{{ route('card.index') }}" class="{{ menuActivator('card.index') }}{{ menuActivator('card.edit') }}"><i class="fa fa-archive fa-fw"></i> Cards</span></a>
            </li>
             <li>
                <a href="{{ route('about.index') }}" class="{{ menuActivator('about.index') }}{{ menuActivator('about.edit') }}"><i class="fa fa-commenting-o fa-fw"></i> About us</span></a>
            </li>
            <li>
                <a href="{{ route('feature.index') }}" class="{{ menuActivator('feature.index') }}{{ menuActivator('feature.edit') }}"><i class="fa fa-podcast fa-fw"></i> Feature</span></a>
            </li>
            <li>
                <a href="{{ route('job.index') }}" class="{{ menuActivator('job.index') }}{{ menuActivator('job.edit') }}"><i class="fa fa-briefcase fa-fw"></i> Job</span></a>
            </li>
            <li>
                <a href="{{ route('service.index') }}" class="{{ menuActivator('service.index') }}{{ menuActivator('service.edit') }}"><i class="fa fa-handshake-o fa-fw"></i> Services</span></a>
            </li>
            <li>
                <a href="{{ route('branch.index') }}" class="{{ menuActivator('branch.index') }}{{ menuActivator('branch.edit') }}"><i class="fa fa-sitemap fa-fw"></i> Branches</span></a>
            </li>
            <li>
                <a href="{{ route('image.index') }}" class="{{ menuActivator('image.index') }}{{ menuActivator('image.edit') }}"><i class="fa fa-picture-o fa-fw"></i> Images</span></a>
            </li>
        </ul>
    </div>
</div>