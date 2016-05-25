<?xml version="1.0" encoding="UTF-8"?>
<!-- This Source Code Form is subject to the terms of the Mozilla Public
   - License, v. 2.0. If a copy of the MPL was not distributed with this
   - file, You can obtain one at http://mozilla.org/MPL/2.0/. -->
<!DOCTYPE html [
  <!ENTITY % htmlDTD
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "DTD/xhtml1-strict.dtd">
  %htmlDTD;
  <!ENTITY % globalDTD SYSTEM "chrome://global/locale/global.dtd">
  %globalDTD;
  <!ENTITY % aboutHomeDTD SYSTEM "chrome://browser/locale/aboutHome.dtd">
  %aboutHomeDTD;
<!ENTITY % syncBrandDTD SYSTEM "chrome://browser/locale/syncBrand.dtd">
%syncBrandDTD;

<!-- These strings are used in the about:home page -->

<!ENTITY abouthome.pageTitle "&brandFullName; Start Page">

<!-- LOCALIZATION NOTE (abouthome.defaultSnippet1.v1):
     text in <a/> will be linked to the Firefox features page on mozilla.com
-->
<!ENTITY abouthome.defaultSnippet1.v1 "Thanks for choosing Firefox! To get the most out of your browser, learn more about the <a>latest features</a>.">
<!-- LOCALIZATION NOTE (abouthome.defaultSnippet2.v1):
     text in <a/> will be linked to the featured add-ons on addons.mozilla.org
-->
<!ENTITY abouthome.defaultSnippet2.v1 "It’s easy to customize your Firefox exactly the way you want it. <a>Choose from thousands of add-ons</a>.">
<!-- LOCALIZATION NOTE (abouthome.rightsSnippet): text in <a/> will be linked to about:rights -->
<!ENTITY abouthome.rightsSnippet "&brandFullName; is free and open source software from the non-profit Mozilla Foundation. <a>Know your rights…</a>">

<!ENTITY abouthome.bookmarksButton.label "Bookmarks">
<!ENTITY abouthome.historyButton.label   "History">
<!-- LOCALIZATION NOTE (abouthome.preferencesButtonWin.label): The label for the
     preferences/options item on about:home on Windows -->
<!ENTITY abouthome.preferencesButtonWin.label  "Options">
<!-- LOCALIZATION NOTE (abouthome.preferencesButtonUnix.label): The label for the
     preferences/options item on about:home on Linux and OS X -->
<!ENTITY abouthome.preferencesButtonUnix.label  "Preferences">
<!ENTITY abouthome.addonsButton.label    "Add-ons">
<!ENTITY abouthome.downloadsButton.label "Downloads">
<!ENTITY abouthome.syncButton.label      "&syncBrand.shortName.label;">

<!-- LOCALIZATION NOTE (abouthome.aboutMozilla.label): The (invisible) label for
     the mozilla wordmark in the top-right corner that links to Mozilla's main
     about page. -->
<!ENTITY abouthome.aboutMozilla.label    "About Mozilla">

  <!ENTITY % browserDTD SYSTEM "chrome://browser/locale/browser.dtd" >
  %browserDTD;
]>
<html xmlns="http://www.w3.org/1999/xhtml" snippetsURL="https://snippets.cdn.mozilla.net/4/Firefox/48.0a2/20160524004015/WINNT_x86-msvc/en-US/aurora/Windows_NT%2010.0/default/default/" snippetsVersion="4">
  <head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Firefox Developer Edition Start Page</title>

    <link rel="icon" type="image/png" id="favicon" href="chrome://branding/content/icon32.png" />
    <link rel="stylesheet" type="text/css" media="all" href="test_files/contentSearchUI.css" />
    <link rel="stylesheet" type="text/css" media="all" defer="defer" href="test_files/aboutHome.css" />

    <script type="text/javascript;version=1.8" src="test_files/aboutHome.js"></script>
    <script type="text/javascript;version=1.8" src="test_files/contentSearchUI.js"></script>
  </head>

  <body dir="ltr">
    <div class="spacer"></div>
    <div id="topSection">
      <div id="brandLogo"></div>

      <div id="searchIconAndTextContainer">
        <div id="searchIcon"></div>
        <input type="text" name="q" id="searchText" maxlength="256" aria-label="Search query" autofocus="autofocus" dir="auto" autocomplete="off" aria-autocomplete="true" aria-controls="searchSuggestionTable" aria-expanded="false" placeholder="Search" />
        <input type="button" id="searchSubmit" value="" onclick="onSearchSubmit(event)" aria-label="Submit search" />
      <table hidden="" id="searchSuggestionTable" class="contentSearchSuggestionTable" role="presentation"><tr class="contentSearchHeaderRow"><td class="contentSearchHeader" id="contentSearchDefaultEngineHeader"><img src="blob:null/29279451-ff36-45c2-ad1d-7889c044ef90" />Google Search</td></tr><tr class="contentSearchSuggestionsContainer"><td class="contentSearchSuggestionsContainer"><table class="contentSearchSuggestionsList" role="listbox"></table></td></tr><table class="contentSearchOneOffsTable contentSearchSuggestionsContainer" role="group"><tr class="contentSearchHeaderRow"><td class="contentSearchHeader" id="contentSearchSearchWithHeader">Search with:</td></tr></table><button class="contentSearchSettingsButton contentSearchHeaderRow contentSearchHeader" id="contentSearchSettingsButton" aria-selected="false">Change Search Settings</button></table></div>

      <div id="snippetContainer">
        <div hidden="true" id="defaultSnippets">
          
          <span id="defaultSnippet2">It’s easy to customize your Firefox exactly the way you want it. <a>Choose from thousands of add-ons</a>.</span>
        </div>
        <span hidden="true" id="rightsSnippet">Firefox Developer Edition is free and open source software from the non-profit Mozilla Foundation. <a>Know your rights…</a></span>
        <div id="snippets"><span id="defaultSnippet1">Thanks for choosing Firefox! To get the most out of your browser, learn more about the <a href="https://www.mozilla.org/firefox/features/?utm_source=snippet&amp;utm_medium=snippet&amp;utm_campaign=default+feature+snippet">latest features</a>.</span></div>
      </div>
    </div>
    <div class="spacer"></div>

    <div id="launcher" session="true">
      <button class="launchButton" id="downloads">Downloads</button>
      <button class="launchButton" id="bookmarks">Bookmarks</button>
      <button class="launchButton" id="history">History</button>
      <button class="launchButton" id="addons">Add-ons</button>
      <button class="launchButton" id="sync">Sync</button>
      <button class="launchButton" id="settings">Options</button>
      <div id="restorePreviousSessionSeparator"></div>
      <button class="launchButton" id="restorePreviousSession">Restore Previous Session</button>
    </div>

    <a id="aboutMozilla" href="https://www.mozilla.org/about/?utm_source=about-home&amp;utm_medium=Referral" aria-label="About Mozilla"></a>
  </body>
</html>