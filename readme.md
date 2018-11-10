Nette Modal Window
=============

This is a simple example modal window in Nette framework.


Installation
------------

	1. clone or download repository "https://github.com/ReinertTomas/2018-11-nette-modal.git"
	2. in project directory run commandline with "composer install"

Description
------------

    - @layout.latte
        - modal wrapper template with include modal-content
        - nette.ajax.js init
        - nette.ajax.js extesion for handle show / hide moda window
    - HomepagePresenter.php
        - function handleModal
        - forms
            - form success redirect
            - form with throw Exception
            - form ajax success
    - Homepage:default.latte
        - modal content for every form in modal window

Assets
------------

All assets included in /www

    - pace.js
    - jquery-3.1.1
    - popper.js
    - bootstrap
    - netteForms
    - nette.ajax.js
	
