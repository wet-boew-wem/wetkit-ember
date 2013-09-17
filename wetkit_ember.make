; WetKit Ember Makefile

core = 7.x
api = 2

; Theme(s)

projects[ember][version] = 2.x-dev
projects[ember][type] = theme
projects[ember][download][type] = git
projects[ember][download][revision] = 71e890a
projects[ember][download][branch] = 7.x-2.x
projects[ember][patch][2074345] = http://drupal.org/files/ember_fade_in-2074345-8.patch
projects[ember][patch][2086857] = http://drupal.org/files/ember_breadcrumbs-2086857-2.patch
