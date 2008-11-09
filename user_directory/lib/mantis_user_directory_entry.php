<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `mantis_user_directory_entry` (
	`id` int(11) auto_increment,
	`hash` VARCHAR(33),
	`date_submitted` TIMESTAMP,
	`company_name` VARCHAR(50),
	`contact_name` VARCHAR(50),
	`contact_email` VARCHAR(255),
	`website_url` VARCHAR(255),
	`mantis_url` VARCHAR(255),
	`comments` TEXT,
	`status` int(1),
	`high_profile` int(1), PRIMARY KEY  (`id`));
*/

/**
* Mantis_user_directory_entry class with integrated CRUD methods.
* @author Php Object Generator
* @version 1.5 rev2
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://phpobjectgenerator.com/?language=php4&wrapper=pog&objectName=mantis_user_directory_entry&attributeList=array+%28%0A++0+%3D%3E+%27hash%27%2C%0A++1+%3D%3E+%27date_submitted%27%2C%0A++2+%3D%3E+%27company_name%27%2C%0A++3+%3D%3E+%27contact_name%27%2C%0A++4+%3D%3E+%27contact_email%27%2C%0A++5+%3D%3E+%27website_url%27%2C%0A++6+%3D%3E+%27mantis_url%27%2C%0A++7+%3D%3E+%27comments%27%2C%0A++8+%3D%3E+%27status%27%2C%0A++9+%3D%3E+%27high_profile%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%2820%29%27%2C%0A++1+%3D%3E+%27TIMESTAMP%27%2C%0A++2+%3D%3E+%27VARCHAR%2850%29%27%2C%0A++3+%3D%3E+%27VARCHAR%2850%29%27%2C%0A++4+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++5+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++6+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++7+%3D%3E+%27TEXT%27%2C%0A++8+%3D%3E+%27int%281%29%27%2C%0A++9+%3D%3E+%27int%281%29%27%2C%0A%29
*/
class mantis_user_directory_entry
{
	var $id;
	var $hash;
	var $date_submitted;
	var $company_name;
	var $contact_name;
	var $contact_email;
	var $website_url;
	var $mantis_url;
	var $comments;
	var $status;
	var $high_profile;
	
	function GetHash()
	{
		 return $this->hash;
	}

	function SetHash($value)
	{
		 $this->hash = $value;
	}


	function GetDate_submitted()
	{
		 return $this->date_submitted;
	}

	function SetDate_submitted($value)
	{
		 $this->date_submitted = $value;
	}


	function GetCompany_name()
	{
		 return $this->company_name;
	}

	function SetCompany_name($value)
	{
		 $this->company_name = $value;
	}


	function GetContact_name()
	{
		 return $this->contact_name;
	}

	function SetContact_name($value)
	{
		 $this->contact_name = $value;
	}


	function GetContact_email()
	{
		 return $this->contact_email;
	}

	function SetContact_email($value)
	{
		 $this->contact_email = $value;
	}


	function GetWebsite_url()
	{
		 return $this->website_url;
	}

	function SetWebsite_url($value)
	{
		 $this->website_url = $value;
	}

	function GetMantis_url()
	{
		 return $this->mantis_url;
	}

	function SetMantis_url($value)
	{
		 $this->mantis_url = $value;
	}


	function GetComments()
	{
		 return $this->comments;
	}

	function SetComments($value)
	{
		 $this->comments = $value;
	}

	function GetStatus()
	{
		 return $this->status;
	}

	function SetStatus($value)
	{
		 $this->status = $value;
	}


	function GetHigh_profile()
	{
		 return $this->high_profile;
	}

	function SetHigh_profile($value)
	{
		 $this->high_profile = $value;
	}

	
	function mantis_user_directory_entry($hash='', $date_submitted='', $company_name='', $contact_name='', $contact_email='', $website_url='', $mantis_url='', $comments='', $status='', $high_profile='')
	{
		$this->hash = $hash;
		$this->date_submitted = $date_submitted;
		$this->company_name = $company_name;
		$this->contact_name = $contact_name;
		$this->contact_email = $contact_email;
		$this->website_url = $website_url;
		$this->mantis_url = $mantis_url;
		$this->comments = $comments;
		$this->status = $status;
		$this->high_profile = $high_profile;
	}
	
	
	/**
	* Gets object from database
	* @param integer $id 
	* @return object $mantis_user_directory_entry
	*/
	function Get($id)
	{
		$Database = new DatabaseConnection();
		$query = "select * from `mantis_user_directory_entry` where `id`='".$id."' LIMIT 1";
		$Database->Query($query);
		$this->id = $Database->Result(0,"id");
		$this->hash = $Database->Unescape($Database->Result(0,"hash"));
		$this->date_submitted = $Database->Unescape($Database->Result(0,"date_submitted"));
		$this->company_name = $Database->Unescape($Database->Result(0,"company_name"));
		$this->contact_name = $Database->Unescape($Database->Result(0,"contact_name"));
		$this->contact_email = $Database->Unescape($Database->Result(0,"contact_email"));
		$this->website_url = $Database->Unescape($Database->Result(0,"website_url"));
		$this->mantis_url = $Database->Unescape($Database->Result(0,"mantis_url"));
		$this->comments = $Database->Unescape($Database->Result(0,"comments"));
		$this->status = $Database->Unescape($Database->Result(0,"status"));
		$this->high_profile = $Database->Unescape($Database->Result(0,"high_profile"));
		return $this;
	}
	

	/**
	* Gets object from database
	* @param integer $id 
	* @return object $mantis_user_directory_entry
	*/
	function GetByHash($hash)
	{
		$Database = new DatabaseConnection();
		$query = "select * from `mantis_user_directory_entry` where `hash`like'".$hash."' LIMIT 1";
		$Database->Query($query);
		$this->id = $Database->Result(0,"id");
		$this->hash = $Database->Unescape($Database->Result(0,"hash"));
		$this->date_submitted = $Database->Unescape($Database->Result(0,"date_submitted"));
		$this->company_name = $Database->Unescape($Database->Result(0,"company_name"));
		$this->contact_name = $Database->Unescape($Database->Result(0,"contact_name"));
		$this->contact_email = $Database->Unescape($Database->Result(0,"contact_email"));
		$this->website_url = $Database->Unescape($Database->Result(0,"website_url"));
		$this->mantis_url = $Database->Unescape($Database->Result(0,"mantis_url"));
		$this->comments = $Database->Unescape($Database->Result(0,"comments"));
		$this->status = $Database->Unescape($Database->Result(0,"status"));
		$this->high_profile = $Database->Unescape($Database->Result(0,"high_profile"));
		return $this;
	}
	

	/**
	* Returns a sorted array of objects that match given conditions
	* @param string $field 
	* @param string $comparator 
	* @param string $fieldValue 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @return array $mantis_user_directory_entryList
	*/
	function Getmantis_user_directory_entryDisplayList($sortBy="",$ascending=true)
	{
		
		$mantis_user_directory_entryList = Array();
		$Database = new DatabaseConnection();
		$query = "select id from mantis_user_directory_entry where status = 2";
		$Database->Query($query);
		for ($i=0; $i < $Database->Rows(); $i++)
		{
			$mantis_user_directory_entry = new mantis_user_directory_entry();
			$mantis_user_directory_entry->Get($Database->Result($i,"id"));
			$mantis_user_directory_entryList[] = $mantis_user_directory_entry;
		}
		switch(strtolower($sortBy))
		{
			case strtolower("hash"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryByhash"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("date_submitted"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBydate_submitted"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("company_name"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycompany_name"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("contact_name"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycontact_name"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("contact_email"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycontact_email"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("website_url"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBywebsite_url"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("mantis_url"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBymantis_url"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("comments"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycomments"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("status"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBystatus"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("high_profile"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryByhigh_profile"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case "":
			default:
			break;
		}
		return $mantis_user_directory_entryList;
	}
	

	/**
	* Returns a sorted array of objects that match given conditions
	* @param string $field 
	* @param string $comparator 
	* @param string $fieldValue 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @return array $mantis_user_directory_entryList
	*/
	function Getmantis_user_directory_entryToCleanList($fieldValue,$sortBy="",$ascending=true)
	{
		
		$mantis_user_directory_entryList = Array();
		$Database = new DatabaseConnection();
		$query = "select id from mantis_user_directory_entry where status = 0 and date_submitted < '$fieldValue'";
		$Database->Query($query);
		for ($i=0; $i < $Database->Rows(); $i++)
		{
			$mantis_user_directory_entry = new mantis_user_directory_entry();
			$mantis_user_directory_entry->Get($Database->Result($i,"id"));
			$mantis_user_directory_entryList[] = $mantis_user_directory_entry;
		}
		switch(strtolower($sortBy))
		{
			case strtolower("hash"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryByhash"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("date_submitted"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBydate_submitted"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("company_name"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycompany_name"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("contact_name"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycontact_name"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("contact_email"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycontact_email"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("website_url"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBywebsite_url"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("mantis_url"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBymantis_url"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("comments"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycomments"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("status"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBystatus"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("high_profile"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryByhigh_profile"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case "":
			default:
			break;
		}
		return $mantis_user_directory_entryList;
	}
	

	/**
	* Returns a sorted array of objects that match given conditions
	* @param string $field 
	* @param string $comparator 
	* @param string $fieldValue 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @return array $mantis_user_directory_entryList
	*/
	function Getmantis_user_directory_entryList($field,$comparator,$fieldValue,$sortBy="",$ascending=true)
	{
		
		$mantis_user_directory_entryList = Array();
		$Database = new DatabaseConnection();
		$query = "select id from mantis_user_directory_entry where `".$field."`".$comparator."'".$Database->Escape($fieldValue)."'";
		$Database->Query($query);
		for ($i=0; $i < $Database->Rows(); $i++)
		{
			$mantis_user_directory_entry = new mantis_user_directory_entry();
			$mantis_user_directory_entry->Get($Database->Result($i,"id"));
			$mantis_user_directory_entryList[] = $mantis_user_directory_entry;
		}
		switch(strtolower($sortBy))
		{
			case strtolower("hash"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryByhash"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("date_submitted"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBydate_submitted"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("company_name"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycompany_name"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("contact_name"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycontact_name"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("contact_email"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycontact_email"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("website_url"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBywebsite_url"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("mantis_url"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBymantis_url"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("comments"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBycomments"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("status"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryBystatus"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case strtolower("high_profile"):
				usort($mantis_user_directory_entryList, array("mantis_user_directory_entry","Comparemantis_user_directory_entryByhigh_profile"));
				if (!$ascending)
				{
					$mantis_user_directory_entryList = array_reverse($mantis_user_directory_entryList);
				}
			break;
			case "":
			default:
			break;
		}
		return $mantis_user_directory_entryList;
	}

	
	/**
	* Saves the object to the database
	* @return integer 
	*/
	function Save()
	{
		
		$Database = new DatabaseConnection();
		
		$query = "select id from `mantis_user_directory_entry` where `id`='".$this->id."' LIMIT 1";
		$Database->Query($query);
		
		if ($Database->Rows() > 0)
		{
			$query = "update `mantis_user_directory_entry` set 
			`hash`='".$Database->Escape($this->hash)."', 
			`date_submitted`='".$Database->Escape($this->date_submitted)."', 
			`company_name`='".$Database->Escape($this->company_name)."', 
			`contact_name`='".$Database->Escape($this->contact_name)."', 
			`contact_email`='".$Database->Escape($this->contact_email)."', 
			`website_url`='".$Database->Escape($this->website_url)."', 
			`mantis_url`='".$Database->Escape($this->mantis_url)."', 
			`comments`='".$Database->Escape($this->comments)."', 
			`status`='".$Database->Escape($this->status)."', 
			`high_profile`='".$Database->Escape($this->high_profile)."' where `id`='".$this->id."'";
		}
		else
		{
			$query = "insert into `mantis_user_directory_entry` (`hash`, `date_submitted`, `company_name`, `contact_name`, `contact_email`, `website_url`, `mantis_url`, `comments`, `status`, `high_profile` ) values (
			'".$Database->Escape($this->hash)."', 
			'".$Database->Escape($this->date_submitted)."', 
			'".$Database->Escape($this->company_name)."', 
			'".$Database->Escape($this->contact_name)."', 
			'".$Database->Escape($this->contact_email)."', 
			'".$Database->Escape($this->website_url)."', 
			'".$Database->Escape($this->mantis_url)."', 
			'".$Database->Escape($this->comments)."', 
			'".$Database->Escape($this->status)."', 
			'".$Database->Escape($this->high_profile)."' )";
		}
		
		$Database->InsertOrUpdate($query);
		
		if ($this->id == "")
		{
			$this->id = $Database->GetCurrentId();
		}
		
		return $this->id;
		
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer 
	*/
	function SaveNew()
	{
		$this->id='';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$Database = new DatabaseConnection();
		$query = "delete from `mantis_user_directory_entry` where `id`='".$this->id."'";
		return $Database->Query($query);
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by hash
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryByhash($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->hash), strtolower($mantis_user_directory_entry2->hash));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by date_submitted
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBydate_submitted($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->date_submitted), strtolower($mantis_user_directory_entry2->date_submitted));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by company_name
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBycompany_name($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->company_name), strtolower($mantis_user_directory_entry2->company_name));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by contact_name
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBycontact_name($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->contact_name), strtolower($mantis_user_directory_entry2->contact_name));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by contact_email
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBycontact_email($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->contact_email), strtolower($mantis_user_directory_entry2->contact_email));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by website_url
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBywebsite_url($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->website_url), strtolower($mantis_user_directory_entry2->website_url));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by mantis_url
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBymantis_url($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->mantis_url), strtolower($mantis_user_directory_entry2->mantis_url));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by comments
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBycomments($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->comments), strtolower($mantis_user_directory_entry2->comments));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by status
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryBystatus($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->status), strtolower($mantis_user_directory_entry2->status));
	}
	
	
	/**
	* private function to sort an array of mantis_user_directory_entry by high_profile
	* @return +1 if attribute1 > attribute2, 0 if attribute1==attribute2 and -1 if attribute1 < attribute2
	*/
	function Comparemantis_user_directory_entryByhigh_profile($mantis_user_directory_entry1, $mantis_user_directory_entry2)
	{
		return strcmp(strtolower($mantis_user_directory_entry1->high_profile), strtolower($mantis_user_directory_entry2->high_profile));
	}
}
?>