<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Hero
 *
 * @ORM\Table(name="Hero")
 * @ORM\Entity
 */
class Hero
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=100, nullable=false)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTimeCreated", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datetimecreated = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="IsVerifiedByMail", type="integer", nullable=false)
     */
    private $isverifiedbymail = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LocationZipcode", type="string", length=100, nullable=false)
     */
    private $locationzipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocationCity", type="string", length=100, nullable=true)
     */
    private $locationcity;

    /**
     * @var string
     *
     * @ORM\Column(name="GuidPrivate", type="string", length=100, nullable=false)
     */
    private $guidprivate;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return Hero
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set datetimecreated.
     *
     * @param \DateTime $datetimecreated
     *
     * @return Hero
     */
    public function setDatetimecreated($datetimecreated)
    {
        $this->datetimecreated = $datetimecreated;

        return $this;
    }

    /**
     * Get datetimecreated.
     *
     * @return \DateTime
     */
    public function getDatetimecreated()
    {
        return $this->datetimecreated;
    }

    /**
     * Set isverifiedbymail.
     *
     * @param int $isverifiedbymail
     *
     * @return Hero
     */
    public function setIsverifiedbymail($isverifiedbymail)
    {
        $this->isverifiedbymail = $isverifiedbymail;

        return $this;
    }

    /**
     * Get isverifiedbymail.
     *
     * @return int
     */
    public function getIsverifiedbymail()
    {
        return $this->isverifiedbymail;
    }

    /**
     * Set locationzipcode.
     *
     * @param string $locationzipcode
     *
     * @return Hero
     */
    public function setLocationzipcode($locationzipcode)
    {
        $this->locationzipcode = $locationzipcode;

        return $this;
    }

    /**
     * Get locationzipcode.
     *
     * @return string
     */
    public function getLocationzipcode()
    {
        return $this->locationzipcode;
    }

    /**
     * Set locationcity.
     *
     * @param string|null $locationcity
     *
     * @return Hero
     */
    public function setLocationcity($locationcity = null)
    {
        $this->locationcity = $locationcity;

        return $this;
    }

    /**
     * Get locationcity.
     *
     * @return string|null
     */
    public function getLocationcity()
    {
        return $this->locationcity;
    }

    /**
     * Set guidprivate.
     *
     * @param string $guidprivate
     *
     * @return Hero
     */
    public function setGuidprivate($guidprivate)
    {
        $this->guidprivate = $guidprivate;

        return $this;
    }

    /**
     * Get guidprivate.
     *
     * @return string
     */
    public function getGuidprivate()
    {
        return $this->guidprivate;
    }
}
