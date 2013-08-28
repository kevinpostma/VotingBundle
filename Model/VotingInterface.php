<?php

namespace Kp\Bundle\VotingBundle\Model;

use DateTime;

/**
 * Promotion model interface.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
interface VotingInterface
{
    /**
     * Returns id of voting
     */
    public function getId();
    
    /**
     * check if voting is active
     * @return boolean active
     */
    public function getActive();
    
    /**
     * Set the active state of a voting.
     * @param boolean $active
     */
    public function setActive($active);
    
    /**
     * @return string author, 
     * returns the author of a voting
     */
    public function getAuthor();
    
    /**
     * Sets the author of a voting
     * @param type $author
     */
    public function setAuthor($author);
    
    /**
     * @return datetime create date of a voting
     * returns Create date of a voting
     */
    public function getCreatedAt();
    
    /**
     * Sets the create date of a voting;
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);
    
    /**
     * Sets the voting
     * @param text $voting
     */
    public function setVoting($voting);
    
    /**
     * Returns the voting
     * @return text $voting
     */
    public function getVoting();
    
}
