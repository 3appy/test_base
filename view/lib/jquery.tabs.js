


<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>Accessible-Tabs/jquery.tabs.js at master · ginader/Accessible-Tabs · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="ginader/Accessible-Tabs" name="twitter:title" /><meta content="Accessible-Tabs - jQuery Plugin that generates a Tab Navigation from Markup that makes sense without Javascript. The generated Tabs are the only ones out there that work for Screenreader users with..." name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/2269?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/2269?v=3&amp;s=400" property="og:image" /><meta content="ginader/Accessible-Tabs" property="og:title" /><meta content="https://github.com/ginader/Accessible-Tabs" property="og:url" /><meta content="Accessible-Tabs - jQuery Plugin that generates a Tab Navigation from Markup that makes sense without Javascript. The generated Tabs are the only ones out there that work for Screenreader users with..." property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="5F9A365B:5FDD:74F6E2:557932A1" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />
    <meta class="js-ga-set" name="dimension1" content="Logged Out">
    <meta class="js-ga-set" name="dimension2" content="Header v3">
    <meta name="is-dotcom" content="true">
      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

      <link rel="icon" sizes="any" mask href="https://assets-cdn.github.com/pinned-octocat.svg">
      <meta name="theme-color" content="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="51YsbHRzyVjIeVbQRiJIKyu8PoDCNlxNx1kkjgd35Xt9kVGu2xCXNlmTmk/5yKujLiIZd11GCgnfjsf+GEd7YA==" name="csrf-token" />

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github/index-ca63068899b9b8d1b9324df8de236c0d49416ae78cc083336c84a5692ccf9546.css" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github2/index-1b83a5e3cdbe8e2d3d0d957bad4e28490ded53991b08efea2ca0ad708622e92a.css" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="cef194d0f9d7eb71a94b585083af2689">

      
  <meta name="description" content="Accessible-Tabs - jQuery Plugin that generates a Tab Navigation from Markup that makes sense without Javascript. The generated Tabs are the only ones out there that work for Screenreader users without support for WAI ARIA.">
  <meta name="go-import" content="github.com/ginader/Accessible-Tabs git https://github.com/ginader/Accessible-Tabs.git">

  <meta content="2269" name="octolytics-dimension-user_id" /><meta content="ginader" name="octolytics-dimension-user_login" /><meta content="190790" name="octolytics-dimension-repository_id" /><meta content="ginader/Accessible-Tabs" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="190790" name="octolytics-dimension-repository_network_root_id" /><meta content="ginader/Accessible-Tabs" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/ginader/Accessible-Tabs/commits/master.atom" rel="alternate" title="Recent Commits to Accessible-Tabs:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      


        
        <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="btn btn-primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="btn" href="/login?return_to=%2Fginader%2FAccessible-Tabs%2Fblob%2Fmaster%2Fjs%2Fjquery.tabs.js" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/ginader/Accessible-Tabs/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/ginader/Accessible-Tabs/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">

        
<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Fginader%2FAccessible-Tabs"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/ginader/Accessible-Tabs/watchers">
    13
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fginader%2FAccessible-Tabs"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/ginader/Accessible-Tabs/stargazers">
      124
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fginader%2FAccessible-Tabs"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/ginader/Accessible-Tabs/network" class="social-count">
        25
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/ginader" class="url fn" itemprop="url" rel="author"><span itemprop="title">ginader</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/ginader/Accessible-Tabs" data-pjax="#js-repo-pjax-container">Accessible-Tabs</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/ginader/Accessible-Tabs/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/ginader/Accessible-Tabs" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /ginader/Accessible-Tabs">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/ginader/Accessible-Tabs/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /ginader/Accessible-Tabs/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull requests">
      <a href="/ginader/Accessible-Tabs/pulls" aria-label="Pull requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /ginader/Accessible-Tabs/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/ginader/Accessible-Tabs/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /ginader/Accessible-Tabs/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/ginader/Accessible-Tabs/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /ginader/Accessible-Tabs/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>
  </ul>


</nav>

              <div class="only-with-full-nav">
                  
<div class="js-clone-url clone-url open"
  data-protocol-type="http">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/ginader/Accessible-Tabs.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="subversion">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/ginader/Accessible-Tabs" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<div class="clone-options">You can clone with
  <form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone" class="inline-form js-clone-selector-form " data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="FupL3i2vDAPIYB+rlYa1aFdi63GwN40LlOhKlKakOO/J0Avsf3wHHeKpymoXwM+V3/ZA5uY4QPcvKzVLN8Fo3g==" /></div><button class="btn-link js-clone-selector" data-protocol="http" type="submit">HTTPS</button></form> or <form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone" class="inline-form js-clone-selector-form " data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="UyUCpPkr89U5EiNyt+/z9g+OZRUsHeMGGgXGxa4DYu4mvAJ1FWa4BPIyVDGmr2NasnMBsXawEvjcqS5zF6kuNA==" /></div><button class="btn-link js-clone-selector" data-protocol="subversion" type="submit">Subversion</button></form>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</div>


  <a href="https://windows.github.com" class="btn btn-sm sidebar-button" title="Save ginader/Accessible-Tabs to your computer and use it in GitHub Desktop." aria-label="Save ginader/Accessible-Tabs to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>


                <a href="/ginader/Accessible-Tabs/archive/master.zip"
                   class="btn btn-sm sidebar-button"
                   aria-label="Download the contents of ginader/Accessible-Tabs as a zip file"
                   title="Download the contents of ginader/Accessible-Tabs as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>

          

<a href="/ginader/Accessible-Tabs/blob/6462c89fcc06007a9951be9f30415b000fe8b7cd/js/jquery.tabs.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:0a371b60e36dba667737679b59613c0d -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/ginader/Accessible-Tabs/blob/master/js/jquery.tabs.js"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.8/js/jquery.tabs.js"
                 data-name="v1.9.8"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.8">v1.9.8</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.7/js/jquery.tabs.js"
                 data-name="v1.9.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.7">v1.9.7</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.6/js/jquery.tabs.js"
                 data-name="v1.9.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.6">v1.9.6</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.5/js/jquery.tabs.js"
                 data-name="v1.9.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.5">v1.9.5</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.4/js/jquery.tabs.js"
                 data-name="v1.9.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.4">v1.9.4</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.3/js/jquery.tabs.js"
                 data-name="v1.9.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.3">v1.9.3</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ginader/Accessible-Tabs/tree/v1.9.2/js/jquery.tabs.js"
                 data-name="v1.9.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.9.2">v1.9.2</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group right">
    <a href="/ginader/Accessible-Tabs/find/master"
          class="js-show-file-finder btn btn-sm empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>

  <div class="breadcrumb js-zeroclipboard-target">
    <span class="repo-root js-repo-root"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/ginader/Accessible-Tabs" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">Accessible-Tabs</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/ginader/Accessible-Tabs/tree/master/js" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">js</span></a></span><span class="separator">/</span><strong class="final-path">jquery.tabs.js</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="" class="avatar" height="24" src="https://0.gravatar.com/avatar/ca1f80437bb8abf43c98c28bc4ecc171?d=https%3A%2F%2Fassets-cdn.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png&amp;r=x&amp;s=140" width="24" />
        <span class="author"><span>Michael Schulze</span></span>
        <time datetime="2013-04-06T19:15:38Z" is="relative-time">Apr 6, 2013</time>
        <div class="commit-title">
            <a href="/ginader/Accessible-Tabs/commit/c07cc1e6a176d6556e39193a1301f113723395ab" class="message" data-pjax="true" title="remove unused vars">remove unused vars</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>7</strong>
           contributors
        </a>
      </p>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="ginader" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=ginader"><img alt="@ginader" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/2269?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="nefarioustim" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=nefarioustim"><img alt="@nefarioustim" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/33619?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="nowells" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=nowells"><img alt="@nowells" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/23833?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="djesse" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=djesse"><img alt="@djesse" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/984009?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="mikewest" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=mikewest"><img alt="@mikewest" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/1497?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="jasonkiss" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=jasonkiss"><img alt="@jasonkiss" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/216879?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="norm" href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js?author=norm"><img alt="@norm" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/32136?v=3&amp;s=40" width="20" /> </a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="@ginader" height="24" src="https://avatars0.githubusercontent.com/u/2269?v=3&amp;s=48" width="24" />
            <a href="/ginader">ginader</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@nefarioustim" height="24" src="https://avatars3.githubusercontent.com/u/33619?v=3&amp;s=48" width="24" />
            <a href="/nefarioustim">nefarioustim</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@nowells" height="24" src="https://avatars3.githubusercontent.com/u/23833?v=3&amp;s=48" width="24" />
            <a href="/nowells">nowells</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@djesse" height="24" src="https://avatars3.githubusercontent.com/u/984009?v=3&amp;s=48" width="24" />
            <a href="/djesse">djesse</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@mikewest" height="24" src="https://avatars3.githubusercontent.com/u/1497?v=3&amp;s=48" width="24" />
            <a href="/mikewest">mikewest</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@jasonkiss" height="24" src="https://avatars3.githubusercontent.com/u/216879?v=3&amp;s=48" width="24" />
            <a href="/jasonkiss">jasonkiss</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@norm" height="24" src="https://avatars1.githubusercontent.com/u/32136?v=3&amp;s=48" width="24" />
            <a href="/norm">norm</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
    <div class="file-actions">

      <div class="btn-group">
        <a href="/ginader/Accessible-Tabs/raw/master/js/jquery.tabs.js" class="btn btn-sm " id="raw-url">Raw</a>
          <a href="/ginader/Accessible-Tabs/blame/master/js/jquery.tabs.js" class="btn btn-sm js-update-url-with-hash">Blame</a>
        <a href="/ginader/Accessible-Tabs/commits/master/js/jquery.tabs.js" class="btn btn-sm " rel="nofollow">History</a>
      </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="https://windows.github.com"
           aria-label="Open this file in GitHub for Windows"
           data-ga-click="Repository, open with desktop, type:windows">
            <span class="octicon octicon-device-desktop"></span>
        </a>

          <button type="button" class="octicon-btn disabled tooltipped tooltipped-n" aria-label="You must be signed in to make or propose changes">
            <span class="octicon octicon-pencil"></span>
          </button>

        <button type="button" class="octicon-btn octicon-btn-danger disabled tooltipped tooltipped-n" aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </button>
    </div>

    <div class="file-info">
        267 lines (248 sloc)
        <span class="file-info-divider"></span>
      14.401 kB
    </div>
  </div>
  
  <div class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/**</span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Accessible Tabs - jQuery plugin for accessible, unobtrusive tabs</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Build to seemlessly work with the CCS-Framework YAML (yaml.de) not depending on YAML though</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * <span class="pl-k">@requires</span> jQuery - tested with 1.9.1, 1.7 and 1.4.2 but might as well work with older versions</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> *</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * english article: http://blog.ginader.de/archives/2009/02/07/jQuery-Accessible-Tabs-How-to-make-tabs-REALLY-accessible.php</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * german article: http://blog.ginader.de/archives/2009/02/07/jQuery-Accessible-Tabs-Wie-man-Tabs-WIRKLICH-zugaenglich-macht.php</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * </span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * code: http://github.com/ginader/Accessible-Tabs</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * please report issues at: http://github.com/ginader/Accessible-Tabs/issues</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> *</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Copyright (c) 2007 Dirk Ginader (ginader.de)</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Dual licensed under the MIT and GPL licenses:</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * http://www.opensource.org/licenses/mit-license.php</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * http://www.gnu.org/licenses/gpl.html</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> *</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> */</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line">(<span class="pl-k">function</span>(<span class="pl-smi">$</span>) {</td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> debugMode <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line">    $.fn.extend({</td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line">        <span class="pl-c">// We assume there could be multiple sets of tabs on a page, so,</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line">        <span class="pl-c">// the unique id for each invididual tab&#39;s heading is identified with params q and r (e.g., id=&quot;accessibletabscontent0-2&quot;)</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">getUniqueId</span>: <span class="pl-k">function</span>(<span class="pl-smi">p</span>, <span class="pl-smi">q</span>, <span class="pl-smi">r</span>){</td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (r<span class="pl-k">===</span><span class="pl-c1">undefined</span>) {r<span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;} <span class="pl-k">else</span> {r<span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">&#39;</span>-<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>r;}</td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> p <span class="pl-k">+</span> q <span class="pl-k">+</span> r;</td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line">        },</td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">accessibleTabs</span>: <span class="pl-k">function</span>(<span class="pl-smi">config</span>) {</td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> defaults <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line">                wrapperClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>content<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Classname to apply to the div that is wrapped around the original Markup</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line">                currentClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>current<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Classname to apply to the LI of the selected Tab</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line">                tabhead<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>h4<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Tag or valid Query Selector of the Elements to Transform the Tabs-Navigation from (originals are removed)</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line">                tabheadClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>tabhead<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Classname to apply to the target heading element for each tab div</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line">                tabbody<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.tabbody<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Tag or valid Query Selector of the Elements to be treated as the Tab Body</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line">                fx<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">&#39;</span>show<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// can be &quot;fadeIn&quot;, &quot;slideDown&quot;, &quot;show&quot;</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line">                fxspeed<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>normal<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// speed (String|Number): &quot;slow&quot;, &quot;normal&quot;, or &quot;fast&quot;) or the number of milliseconds to run the animation</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line">                currentInfoText<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>current tab: <span class="pl-pds">&#39;</span></span>, <span class="pl-c">// text to indicate for screenreaders which tab is the current one</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line">                currentInfoPosition<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>prepend<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Definition where to insert the Info Text. Can be either &quot;prepend&quot; or &quot;append&quot;</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line">                currentInfoClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>current-info<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Class to apply to the span wrapping the CurrentInfoText</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line">                tabsListClass<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">&#39;</span>tabs-list<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Class to apply to the generated list of tabs above the content</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line">                syncheights<span class="pl-k">:</span><span class="pl-c1">false</span>, <span class="pl-c">// syncs the heights of the tab contents when the SyncHeight plugin is available http://blog.ginader.de/dev/jquery/syncheight/index.php</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line">                syncHeightMethodName<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">&#39;</span>syncHeight<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// set the Method name of the plugin you want to use to sync the tab contents. Defaults to the SyncHeight plugin: http://github.com/ginader/syncHeight</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line">                cssClassAvailable<span class="pl-k">:</span><span class="pl-c1">false</span>, <span class="pl-c">// Enable individual css classes for tabs. Gets the appropriate class name of a tabhead element and apply it to the tab list element. Boolean value</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line">                saveState<span class="pl-k">:</span><span class="pl-c1">false</span>, <span class="pl-c">// save the selected tab into a cookie so it stays selected after a reload. This requires that the wrapping div needs to have an ID (so we know which tab we&#39;re saving)</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line">                autoAnchor<span class="pl-k">:</span><span class="pl-c1">false</span>, <span class="pl-c">// will move over any existing id of a headline in tabs markup so it can be linked to it</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line">                pagination<span class="pl-k">:</span><span class="pl-c1">false</span>, <span class="pl-c">// adds buttons to each tab to switch to the next/previous tab</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line">                position<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">&#39;</span>top<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// can be &#39;top&#39; or &#39;bottom&#39;. Defines where the tabs list is inserted.</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line">                wrapInnerNavLinks<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>, <span class="pl-c">// inner wrap for a-tags in tab navigation. See http://api.jquery.com/wrapInner/ for further informations</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line">                firstNavItemClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>first<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Classname of the first list item in the tab navigation</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line">                lastNavItemClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>last<span class="pl-pds">&#39;</span></span>, <span class="pl-c">// Classname of the last list item in the tab navigation</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line">                clearfixClass<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>clearfix<span class="pl-pds">&#39;</span></span> <span class="pl-c">// Name of the Class that is used to clear/contain floats</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line">            };</td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> keyCodes <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line">                <span class="pl-c1">37</span> <span class="pl-k">:</span> <span class="pl-k">-</span><span class="pl-c1">1</span>, <span class="pl-c">//LEFT</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line">                <span class="pl-c1">38</span> <span class="pl-k">:</span> <span class="pl-k">-</span><span class="pl-c1">1</span>, <span class="pl-c">//UP</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line">                <span class="pl-c1">39</span> <span class="pl-k">:</span> <span class="pl-k">+</span><span class="pl-c1">1</span>, <span class="pl-c">//RIGHT </span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line">                <span class="pl-c1">40</span> <span class="pl-k">:</span> <span class="pl-k">+</span><span class="pl-c1">1</span> <span class="pl-c">//DOWN</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line">            };</td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> positions <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line">                top <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>prepend<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line">                bottom <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>append<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line">            };</td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line">            <span class="pl-v">this</span>.<span class="pl-c1">options</span> <span class="pl-k">=</span> $.extend(defaults, config);</td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> tabsCount <span class="pl-k">=</span> <span class="pl-c1">0</span>;</td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span>($(<span class="pl-s"><span class="pl-pds">&quot;</span>body<span class="pl-pds">&quot;</span></span>).<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibleTabsCount<span class="pl-pds">&#39;</span></span>) <span class="pl-k">!==</span> <span class="pl-c1">undefined</span>){</td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line">                tabsCount <span class="pl-k">=</span> $(<span class="pl-s"><span class="pl-pds">&quot;</span>body<span class="pl-pds">&quot;</span></span>).<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibleTabsCount<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line">            $(<span class="pl-s"><span class="pl-pds">&quot;</span>body<span class="pl-pds">&quot;</span></span>).<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibleTabsCount<span class="pl-pds">&#39;</span></span>,<span class="pl-v">this</span>.<span class="pl-c1">size</span>()<span class="pl-k">+</span>tabsCount);</td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> o <span class="pl-k">=</span> <span class="pl-v">this</span>;</td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-v">this</span>.each(<span class="pl-k">function</span>(<span class="pl-smi">t</span>) {</td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> el <span class="pl-k">=</span> $(<span class="pl-v">this</span>);</td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> list <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> tabCount <span class="pl-k">=</span> <span class="pl-c1">0</span>;</td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> ids <span class="pl-k">=</span> [];</td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line">                $(el).wrapInner(<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;div class=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.wrapperClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;/div&gt;<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line">                $(el).<span class="pl-c1">find</span>(o.<span class="pl-c1">options</span>.tabhead).each(<span class="pl-k">function</span>(<span class="pl-smi">i</span>){</td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> id <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> elId <span class="pl-k">=</span> $(<span class="pl-v">this</span>).attr(<span class="pl-s"><span class="pl-pds">&#39;</span>id<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">if</span>(elId){</td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">// Skip this item if it already exists.</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">if</span>(elId.<span class="pl-c1">indexOf</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibletabscontent<span class="pl-pds">&#39;</span></span>) <span class="pl-k">===</span> <span class="pl-c1">0</span>) {</td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line">                            <span class="pl-k">return</span>;</td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line">                        }</td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line">                        id <span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">&#39;</span> id=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>elId<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line">                    }</td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> tabId <span class="pl-k">=</span> o.getUniqueId(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibletabscontent<span class="pl-pds">&#39;</span></span>, tabsCount<span class="pl-k">+</span>t, i);<span class="pl-c">//get a unique id to assign to this tab&#39;s heading</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> navItemId <span class="pl-k">=</span> o.getUniqueId(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibletabsnavigation<span class="pl-pds">&#39;</span></span>, tabsCount<span class="pl-k">+</span>t, i);<span class="pl-c">//get a unique id for this navigation item</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line">                    ids.<span class="pl-c1">push</span>(tabId);</td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">if</span>(o.<span class="pl-c1">options</span>.cssClassAvailable <span class="pl-k">===</span> <span class="pl-c1">true</span>) {</td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">var</span> cssClass <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">if</span>($(<span class="pl-v">this</span>).attr(<span class="pl-s"><span class="pl-pds">&#39;</span>class<span class="pl-pds">&#39;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line">                            cssClass <span class="pl-k">=</span> $(<span class="pl-v">this</span>).attr(<span class="pl-s"><span class="pl-pds">&#39;</span>class<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line">                            cssClass <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span> class=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>cssClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line">                        }</td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line">                        list <span class="pl-k">+=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;li id=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>navItemId<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;a<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>id<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>cssClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span> href=&quot;#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>tabId<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>$(<span class="pl-v">this</span>).html()<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;/li&gt;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line">                    } <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line">                      list <span class="pl-k">+=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;li id=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>navItemId<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;a<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>id<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span> href=&quot;#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>tabId<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>$(<span class="pl-v">this</span>).html()<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;/li&gt;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line">                    }</td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line">                    $(<span class="pl-v">this</span>).attr({<span class="pl-s"><span class="pl-pds">&quot;</span>id<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> tabId, <span class="pl-s"><span class="pl-pds">&quot;</span>class<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> o.<span class="pl-c1">options</span>.tabheadClass, <span class="pl-s"><span class="pl-pds">&quot;</span>tabindex<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>-1<span class="pl-pds">&quot;</span></span>});<span class="pl-c">//assign the unique id and the tabheadClass class name to this tab&#39;s heading</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line">                    tabCount<span class="pl-k">++</span>;</td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line">                });</td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span> (o.<span class="pl-c1">options</span>.syncheights <span class="pl-k">&amp;&amp;</span> $.fn[o.<span class="pl-c1">options</span>.syncHeightMethodName]) {</td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line">                    $(el).<span class="pl-c1">find</span>(o.<span class="pl-c1">options</span>.tabbody)[o.<span class="pl-c1">options</span>.syncHeightMethodName]();</td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line">                    $(<span class="pl-c1">window</span>).resize(<span class="pl-k">function</span>(){</td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line">                        $(el).<span class="pl-c1">find</span>(o.<span class="pl-c1">options</span>.tabbody)[o.<span class="pl-c1">options</span>.syncHeightMethodName]();</td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line">                    });</td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line">                <span class="pl-c">// Ensure that the call to setup tabs is re-runnable</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> tabs_selector <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> o.<span class="pl-c1">options</span>.tabsListClass;</td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span>(<span class="pl-k">!</span>$(el).<span class="pl-c1">find</span>(tabs_selector).<span class="pl-c1">length</span>) {</td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line">                    $(el)[positions[o.<span class="pl-c1">options</span>.position]](<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;ul class=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.clearfixClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span> tabamount<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>tabCount<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;/ul&gt;<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line">                $(el).<span class="pl-c1">find</span>(tabs_selector).append(list);</td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line">                <span class="pl-c">// initial show first content block and hide the others</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> content <span class="pl-k">=</span> $(el).<span class="pl-c1">find</span>(o.<span class="pl-c1">options</span>.tabbody);</td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span> (content.<span class="pl-c1">length</span> <span class="pl-k">&gt;</span> <span class="pl-c1">0</span>) {</td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line">                    $(content).hide();</td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line">                    $(content[<span class="pl-c1">0</span>]).show();</td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line">                $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ul.<span class="pl-pds">&quot;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&quot;</span>&gt;li:first<span class="pl-pds">&quot;</span></span>).addClass(o.<span class="pl-c1">options</span>.currentClass).addClass(o.<span class="pl-c1">options</span>.firstNavItemClass)</td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line">                  .<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>a<span class="pl-pds">&#39;</span></span>)[o.<span class="pl-c1">options</span>.currentInfoPosition](<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;span class=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.currentInfoClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.currentInfoText<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/span&gt;<span class="pl-pds">&#39;</span></span>)</td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line">                  .parents(<span class="pl-s"><span class="pl-pds">&quot;</span>ul.<span class="pl-pds">&quot;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass).children(<span class="pl-s"><span class="pl-pds">&#39;</span>li:last<span class="pl-pds">&#39;</span></span>).addClass(o.<span class="pl-c1">options</span>.lastNavItemClass);</td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span> (o.<span class="pl-c1">options</span>.wrapInnerNavLinks) {</td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line">                  $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>ul.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;li&gt;a<span class="pl-pds">&#39;</span></span>).wrapInner(o.<span class="pl-c1">options</span>.wrapInnerNavLinks);</td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line">                $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>ul.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;li&gt;a<span class="pl-pds">&#39;</span></span>).each(<span class="pl-k">function</span>(<span class="pl-smi">i</span>){</td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line">                    $(<span class="pl-v">this</span>).<span class="pl-c1">click</span>(<span class="pl-k">function</span>(<span class="pl-smi">event</span>){</td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c1">event</span>.preventDefault();</td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line">                        el.trigger(<span class="pl-s"><span class="pl-pds">&quot;</span>showTab.accessibleTabs<span class="pl-pds">&quot;</span></span>, [$(<span class="pl-c1">event</span>.<span class="pl-c1">target</span>)]);</td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">if</span>(o.<span class="pl-c1">options</span>.saveState <span class="pl-k">&amp;&amp;</span> $.<span class="pl-c1">cookie</span>){</td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line">                            $.<span class="pl-c1">cookie</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibletab_<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>el.attr(<span class="pl-s"><span class="pl-pds">&#39;</span>id<span class="pl-pds">&#39;</span></span>)<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>_active<span class="pl-pds">&#39;</span></span>,i);</td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line">                        }</td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line">                        $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>ul.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;li.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.currentClass).removeClass(o.<span class="pl-c1">options</span>.currentClass)</td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line">                        .<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>span.<span class="pl-pds">&quot;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.currentInfoClass).<span class="pl-c1">remove</span>();</td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line">                        $(<span class="pl-v">this</span>).<span class="pl-c1">blur</span>();</td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line">                        $(el).<span class="pl-c1">find</span>(o.<span class="pl-c1">options</span>.tabbody<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>:visible<span class="pl-pds">&#39;</span></span>).hide();</td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line">                        $(el).<span class="pl-c1">find</span>(o.<span class="pl-c1">options</span>.tabbody).eq(i)[o.<span class="pl-c1">options</span>.fx](o.<span class="pl-c1">options</span>.fxspeed);</td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line">                        $(<span class="pl-v">this</span>)[o.<span class="pl-c1">options</span>.currentInfoPosition](<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;span class=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.currentInfoClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.currentInfoText<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/span&gt;<span class="pl-pds">&#39;</span></span>)</td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line">                        .<span class="pl-c1">parent</span>().addClass(o.<span class="pl-c1">options</span>.currentClass);</td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">//now, only after writing the currentInfoText span to the tab list link, set focus to the tab&#39;s heading</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line">                        $($(<span class="pl-v">this</span>).attr(<span class="pl-s"><span class="pl-pds">&quot;</span>href<span class="pl-pds">&quot;</span></span>)).<span class="pl-c1">focus</span>().keyup(<span class="pl-k">function</span>(<span class="pl-smi">event</span>){</td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line">                            <span class="pl-k">if</span>(keyCodes[<span class="pl-c1">event</span>.keyCode]){</td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line">                                o.showAccessibleTab(i<span class="pl-k">+</span>keyCodes[<span class="pl-c1">event</span>.keyCode]);</td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line">                                $(<span class="pl-v">this</span>).unbind( <span class="pl-s"><span class="pl-pds">&quot;</span>keyup<span class="pl-pds">&quot;</span></span> );</td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line">                            }</td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line">                        });</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">// $(el).find(&#39;.accessibletabsanchor&#39;).keyup(function(event){</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">//     if(keyCodes[event.keyCode]){</span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">//         o.showAccessibleTab(i+keyCodes[event.keyCode]);</span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">//     }</span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code blob-code-inner js-file-line">                        <span class="pl-c">// });</span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code blob-code-inner js-file-line">                    });</td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code blob-code-inner js-file-line">                    $(<span class="pl-v">this</span>).<span class="pl-c1">focus</span>(<span class="pl-k">function</span>(){</td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code blob-code-inner js-file-line">                        $(<span class="pl-c1">document</span>).keyup(<span class="pl-k">function</span>(<span class="pl-smi">event</span>){</td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code blob-code-inner js-file-line">                            <span class="pl-k">if</span>(keyCodes[<span class="pl-c1">event</span>.keyCode]){</td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code blob-code-inner js-file-line">                                o.showAccessibleTab(i<span class="pl-k">+</span>keyCodes[<span class="pl-c1">event</span>.keyCode]);</td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code blob-code-inner js-file-line">                            }</td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code blob-code-inner js-file-line">                        });</td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code blob-code-inner js-file-line">                    });</td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code blob-code-inner js-file-line">                    $(<span class="pl-v">this</span>).<span class="pl-c1">blur</span>(<span class="pl-k">function</span>(){</td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code blob-code-inner js-file-line">                        $(<span class="pl-c1">document</span>).unbind( <span class="pl-s"><span class="pl-pds">&quot;</span>keyup<span class="pl-pds">&quot;</span></span> );</td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code blob-code-inner js-file-line">                    });</td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code blob-code-inner js-file-line">                });</td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span>(o.<span class="pl-c1">options</span>.saveState <span class="pl-k">&amp;&amp;</span> $.<span class="pl-c1">cookie</span>){</td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> savedState <span class="pl-k">=</span> $.<span class="pl-c1">cookie</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibletab_<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>el.attr(<span class="pl-s"><span class="pl-pds">&#39;</span>id<span class="pl-pds">&#39;</span></span>)<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>_active<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code blob-code-inner js-file-line">                    debug($.<span class="pl-c1">cookie</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>accessibletab_<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>el.attr(<span class="pl-s"><span class="pl-pds">&#39;</span>id<span class="pl-pds">&#39;</span></span>)<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>_active<span class="pl-pds">&#39;</span></span>));</td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">if</span>(savedState <span class="pl-k">!==</span> <span class="pl-c1">null</span>){</td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code blob-code-inner js-file-line">                        o.showAccessibleTab(savedState,el.attr(<span class="pl-s"><span class="pl-pds">&#39;</span>id<span class="pl-pds">&#39;</span></span>));</td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code blob-code-inner js-file-line">                    }</td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span>(o.<span class="pl-c1">options</span>.autoAnchor <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">window</span>.<span class="pl-c1">location</span>.<span class="pl-c1">hash</span>){</td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> anchorTab <span class="pl-k">=</span> $(<span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass).<span class="pl-c1">find</span>(<span class="pl-c1">window</span>.<span class="pl-c1">location</span>.<span class="pl-c1">hash</span>);</td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">if</span>(anchorTab.<span class="pl-c1">size</span>()){</td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code blob-code-inner js-file-line">                        anchorTab.<span class="pl-c1">click</span>();</td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code blob-code-inner js-file-line">                    }</td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span>(o.<span class="pl-c1">options</span>.pagination){</td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> m <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;ul class=&quot;pagination&quot;&gt;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code blob-code-inner js-file-line">                    m <span class="pl-k">+=</span><span class="pl-s"><span class="pl-pds">&#39;</span>    &lt;li class=&quot;previous&quot;&gt;&lt;a href=&quot;#{previousAnchor}&quot;&gt;&lt;span&gt;{previousHeadline}&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code blob-code-inner js-file-line">                    m <span class="pl-k">+=</span><span class="pl-s"><span class="pl-pds">&#39;</span>    &lt;li class=&quot;next&quot;&gt;&lt;a href=&quot;#{nextAnchor}&quot;&gt;&lt;span&gt;{nextHeadline}&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code blob-code-inner js-file-line">                    m <span class="pl-k">+=</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/ul&gt;<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> tabs <span class="pl-k">=</span> $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>.tabbody<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> tabcount <span class="pl-k">=</span> tabs.<span class="pl-c1">size</span>();</td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code blob-code-inner js-file-line">                    tabs.each(<span class="pl-k">function</span>(<span class="pl-smi">idx</span>){</td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code blob-code-inner js-file-line">                        $(<span class="pl-v">this</span>).append(m);</td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">var</span> next <span class="pl-k">=</span> idx<span class="pl-k">+</span><span class="pl-c1">1</span>;</td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">if</span>(next<span class="pl-k">&gt;=</span>tabcount){next <span class="pl-k">=</span> <span class="pl-c1">0</span>;}</td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">var</span> previous <span class="pl-k">=</span> idx<span class="pl-k">-</span><span class="pl-c1">1</span>;</td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">if</span>(previous<span class="pl-k">&lt;</span><span class="pl-c1">0</span>){previous <span class="pl-k">=</span> tabcount<span class="pl-k">-</span><span class="pl-c1">1</span>;}</td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">var</span> p <span class="pl-k">=</span> $(<span class="pl-v">this</span>).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>.pagination<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">var</span> previousEl <span class="pl-k">=</span> p.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>.previous<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code blob-code-inner js-file-line">                        previousEl.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>span<span class="pl-pds">&#39;</span></span>).<span class="pl-c1">text</span>($(<span class="pl-s"><span class="pl-pds">&#39;</span>#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>ids[previous]).<span class="pl-c1">text</span>());</td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code blob-code-inner js-file-line">                        previousEl.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>a<span class="pl-pds">&#39;</span></span>).attr(<span class="pl-s"><span class="pl-pds">&#39;</span>href<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>ids[previous])</td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code blob-code-inner js-file-line">                        .<span class="pl-c1">click</span>(<span class="pl-k">function</span>(<span class="pl-smi">event</span>){</td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code blob-code-inner js-file-line">                            <span class="pl-c1">event</span>.preventDefault();</td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code blob-code-inner js-file-line">                            $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>.tabs-list a<span class="pl-pds">&#39;</span></span>).eq(previous).<span class="pl-c1">click</span>();</td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code blob-code-inner js-file-line">                        });</td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code blob-code-inner js-file-line">                        <span class="pl-k">var</span> nextEl <span class="pl-k">=</span> p.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>.next<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code blob-code-inner js-file-line">                        nextEl.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>span<span class="pl-pds">&#39;</span></span>).<span class="pl-c1">text</span>($(<span class="pl-s"><span class="pl-pds">&#39;</span>#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>ids[next]).<span class="pl-c1">text</span>());</td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code blob-code-inner js-file-line">                        nextEl.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>a<span class="pl-pds">&#39;</span></span>).attr(<span class="pl-s"><span class="pl-pds">&#39;</span>href<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>ids[next])</td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code blob-code-inner js-file-line">                        .<span class="pl-c1">click</span>(<span class="pl-k">function</span>(<span class="pl-smi">event</span>){</td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code blob-code-inner js-file-line">                            <span class="pl-c1">event</span>.preventDefault();</td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code blob-code-inner js-file-line">                            $(el).<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>.tabs-list a<span class="pl-pds">&#39;</span></span>).eq(next).<span class="pl-c1">click</span>();</td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code blob-code-inner js-file-line">                        });</td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code blob-code-inner js-file-line">                    });</td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code blob-code-inner js-file-line">            });</td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code blob-code-inner js-file-line">        },</td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">showAccessibleTab</span>: <span class="pl-k">function</span>(<span class="pl-smi">index</span>,<span class="pl-smi">id</span>){</td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code blob-code-inner js-file-line">            debug(<span class="pl-s"><span class="pl-pds">&#39;</span>showAccessibleTab<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> o <span class="pl-k">=</span> <span class="pl-v">this</span>;</td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span>(id) {</td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> el <span class="pl-k">=</span> $(<span class="pl-s"><span class="pl-pds">&#39;</span>#<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>id);</td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">var</span> links <span class="pl-k">=</span> el.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>ul.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;li&gt;a<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code blob-code-inner js-file-line">                el.trigger(<span class="pl-s"><span class="pl-pds">&quot;</span>showTab.accessibleTabs<span class="pl-pds">&quot;</span></span>, [links.eq(index)]);</td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code blob-code-inner js-file-line">                links.eq(index).<span class="pl-c1">click</span>();</td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code blob-code-inner js-file-line">            } <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">return</span> <span class="pl-v">this</span>.each(<span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> el <span class="pl-k">=</span> $(<span class="pl-v">this</span>);</td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code blob-code-inner js-file-line">                    el.trigger(<span class="pl-s"><span class="pl-pds">&quot;</span>showTab.accessibleTabs<span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code blob-code-inner js-file-line">                    <span class="pl-k">var</span> links <span class="pl-k">=</span> el.<span class="pl-c1">find</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>ul.<span class="pl-pds">&#39;</span></span><span class="pl-k">+</span>o.<span class="pl-c1">options</span>.tabsListClass<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;li&gt;a<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code blob-code-inner js-file-line">                    el.trigger(<span class="pl-s"><span class="pl-pds">&quot;</span>showTab.accessibleTabs<span class="pl-pds">&quot;</span></span>, [links.eq(index)]);</td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code blob-code-inner js-file-line">                    links.eq(index).<span class="pl-c1">click</span>();</td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code blob-code-inner js-file-line">                });</td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code blob-code-inner js-file-line">        },</td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">showAccessibleTabSelector</span>: <span class="pl-k">function</span>(<span class="pl-smi">selector</span>){</td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code blob-code-inner js-file-line">            debug(<span class="pl-s"><span class="pl-pds">&#39;</span>showAccessibleTabSelector<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">var</span> el <span class="pl-k">=</span> $(selector);</td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span>(el){</td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">if</span>(el.get(<span class="pl-c1">0</span>).<span class="pl-c1">nodeName</span>.<span class="pl-c1">toLowerCase</span>() <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>a<span class="pl-pds">&#39;</span></span>){</td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code blob-code-inner js-file-line">                    el.<span class="pl-c1">click</span>();</td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code blob-code-inner js-file-line">                }<span class="pl-k">else</span>{</td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code blob-code-inner js-file-line">                    debug(<span class="pl-s"><span class="pl-pds">&#39;</span>the selector of a showAccessibleTabSelector() call needs to point to a tabs headline!<span class="pl-pds">&#39;</span></span>);</td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code blob-code-inner js-file-line">                }</td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code blob-code-inner js-file-line">    });</td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code blob-code-inner js-file-line">    <span class="pl-c">// private Methods</span></td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">function</span> <span class="pl-en">debug</span>(<span class="pl-smi">msg</span>,<span class="pl-smi">info</span>){</td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span>(debugMode <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">window</span>.<span class="pl-en">console</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">window</span>.<span class="pl-en">console</span><span class="pl-c1">.log</span>){</td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span>(info){</td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code blob-code-inner js-file-line">                <span class="pl-c1">window</span>.<span class="pl-en">console</span><span class="pl-c1">.log</span>(info<span class="pl-k">+</span><span class="pl-s"><span class="pl-pds">&#39;</span>: <span class="pl-pds">&#39;</span></span>,msg);</td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code blob-code-inner js-file-line">            }<span class="pl-k">else</span>{</td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code blob-code-inner js-file-line">                <span class="pl-c1">window</span>.<span class="pl-en">console</span><span class="pl-c1">.log</span>(msg);</td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code blob-code-inner js-file-line">})(jQuery);</td>
      </tr>
</table>

  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.05026s from github-fe126-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
    </ul>
  </div>
</div>


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder=""></textarea>
      <div class="suggester-container">
        <div class="suggester fullscreen-suggester js-suggester js-navigation-container"></div>
      </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-dea2e78f4b34a1f3429ade94f98bd25fad6bbe8d28635a93d9caeb68e3c2d258.js"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github/index-aa24a643b109a5e4952b79b58d176e8c92173833a074b1ff8f9eeae2557e66aa.js"></script>
      
      
  </body>
</html>

