<?php

namespace JedenWeb\Doctrine\Visible;

use Doctrine\ORM\Mapping as ORM;

trait Visible
{

	/**
	 * @ORM\Column(type="boolean")
	 * @var boolean
	 */
	protected $visible = TRUE;


	/**
	 * @return bool
	 */
	public function isVisible()
	{
		return $this->visible;
	}


	/***/
	public function show()
	{
		$this->visible = TRUE;
	}


	/***/
	public function hide()
	{
		$this->visible = FALSE;
	}


	/***/
	public function toggleVisibility()
	{
		$this->visible = !$this->visible;
	}

}
