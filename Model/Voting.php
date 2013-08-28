<?php

namespace Kp\Bundle\VotingBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Storage agnostic voting object
 *
 * @author Kevin Postma <kevinpostma@live.nl>
 */
abstract class Voting implements VotingInterface
{
    private $id;
    private $active;
    private $author;
    private $createdAt;
    private $voting;
    
    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setActive($active)
    {
        $this->active = $active;
    }
    
    public function getActive()
    {
        return $this->active;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setVoting($voting)
    {
        $this->voting = $voting;
    }
    
    public function getVoting()
    {
        return $this->voting;
    }

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

?>
