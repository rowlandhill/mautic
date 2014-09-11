<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CampaignBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class LeadEventLog
 * @ORM\Table(name="campaign_lead_event_log")
 * @ORM\Entity()
 * @Serializer\ExclusionPolicy("all")
 */
class LeadEventLog
{

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="log")
     **/
    private $event;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Mautic\LeadBundle\Entity\Lead")
     **/
    private $lead;

    /**
     * @ORM\ManyToOne(targetEntity="Mautic\CoreBundle\Entity\IpAddress")
     **/
    private $ipAddress;

    /**
     * @ORM\Column(name="date_fired", type="datetime")
     **/
    private $dateFired;

    /**
     * @return mixed
     */
    public function getDateFired ()
    {
        return $this->dateFired;
    }

    /**
     * @param mixed $dateFired
     */
    public function setDateFired ($dateFired)
    {
        $this->dateFired = $dateFired;
    }

    /**
     * @return mixed
     */
    public function getIpAddress ()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress ($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return mixed
     */
    public function getLead ()
    {
        return $this->lead;
    }

    /**
     * @param mixed $lead
     */
    public function setLead ($lead)
    {
        $this->lead = $lead;
    }

    /**
     * @return mixed
     */
    public function getEvent ()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent ($event)
    {
        $this->event = $event;
    }
}
