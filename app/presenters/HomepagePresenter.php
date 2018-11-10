<?php

namespace App\Presenters;

use Nette\Application\UI\Form;
use Nette\Forms\Controls\Button;
use \Exception;

final class HomepagePresenter extends BasePresenter
{
        
	public function renderDefault()
	{
		
	}
        
        public function handleModal( $modalId )
        {
                
                if ( $this->isAjax() )
                {
                        $this->template->modal = $modalId;
                        $this->redrawControl( 'modal' );
                }
                else
                {
                        $this->redirect( 'this' );
                }
        }

        /**
         * Form User
         */
        public function createComponentFormUser()
        {
                $form = new Form();
                
                $form->addText( 'name', 'Name' )
                        ->setRequired( 'Please fill name' );
                
                $form->addText( 'surname', 'Surname' )
                        ->setRequired( 'Please fill surname' );
                
                $form->addSubmit( 'submit_save', 'Save' )
                        ->onClick[] = function ( Button $button )
                        {
                                $form = $button->getForm();
                                try
                                {
//                                        throw new Exception( 'Exception example' );
                                        $this->template->result = $form->getValues();
                                }
                                catch ( Exception $e )
                                {
                                        if ( $this->isAjax() )
                                        {
                                                $form->addError( $e->getMessage() );
                                                $this->template->modal = 'movie';
                                                $this->redrawControl( 'modal-content' );
                                        }
                                        else
                                        {
                                                $this->flashMessage( $e->getMessage(), 'alert-danger' );
                                                $this->redirect( 'this' );
                                        }
                                }
                        } ;
                        
                return $form;        
        }
        
        /**
         * Form Movie
         */
        public function createComponentFormMovie()
        {
                $form = new Form();
                
                $form->getElementPrototype()->class( 'ajax' );
                
                $form->addText( 'title', 'Title' )
                        ->setRequired( 'Please fill title' );
                
                $form->addText( 'year', 'Year' )
                        ->setRequired( 'Please fill year' );
                
                $form->addSubmit( 'submit_save', 'Save' )
                        ->onClick[] = function ( Button $button )
                        {
                                $form = $button->getForm();
                                try
                                {
                                        throw new Exception( 'Exception example' );
                                        
                                        $this->template->result = $form->getValues();
                                        
                                        if ( $this->isAjax() )
                                        {
                                                $this->redrawControl( 'form-result' );
                                        }
                                        else
                                        {
                                                $this->redirect( 'this' );
                                        }
                                }
                                catch ( Exception $e )
                                {
                                        if ( $this->isAjax() )
                                        {
                                                $form->addError( $e->getMessage() );
                                                $this->template->modal = 'movie';
                                                $this->redrawControl( 'modal-content' );
                                        }
                                        else
                                        {
                                                $this->flashMessage( $e->getMessage(), 'alert-danger' );
                                                $this->redirect( 'this' );
                                        }
                                }
                        } ;
                        
                return $form;
        }
        
        /**
         * Form Movie
         */
        public function createComponentFormAddress()
        {
                $form = new Form();
                
                $form->getElementPrototype()->class( 'ajax' );
                
                $form->addText( 'address', 'Address' )
                        ->setRequired( 'Please fill address' );
                
                $form->addText( 'city', 'City' )
                        ->setRequired( 'Please fill city' );
                
                $form->addSubmit( 'submit_save', 'Save' )
                        ->onClick[] = function ( Button $button )
                        {
                                $form = $button->getForm();
                                try
                                {
                                        $this->template->result = $form->getValues();
                                        
                                        if ( $this->isAjax() )
                                        {
                                                $this->redrawControl( 'form-result' );
                                        }
                                        else
                                        {
                                                $this->redirect( 'this' );
                                        }
                                }
                                catch ( Exception $e )
                                {
                                        if ( $this->isAjax() )
                                        {
                                                $form->addError( $e->getMessage() );
                                                $this->template->modal = 'movie';
                                                $this->redrawControl( 'modal-content' );
                                        }
                                        else
                                        {
                                                $this->flashMessage( $e->getMessage(), 'alert-danger' );
                                                $this->redirect( 'this' );
                                        }
                                }
                        } ;
                        
                return $form;
        }
        
}
