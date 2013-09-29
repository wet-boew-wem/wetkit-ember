; WetKit Ember Makefile

core = 7.x
api = 2

; Theme(s)

projects[ember][version] = 2.x-dev
projects[ember][type] = theme
projects[ember][download][type] = git
projects[ember][download][revision] = a12c2e2
projects[ember][download][branch] = 7.x-2.x
projects[ember][patch][2074345] = http://drupal.org/files/ember_fade_in-2074345-13.patch
projects[ember][patch][2074345] = http://drupal.org/files/ember_dropdown_ie8_firefox-2094895-6.patch
