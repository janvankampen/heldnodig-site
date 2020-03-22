<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table(name="Request")
 * @ORM\Entity
 */
class Request
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
     * @ORM\Column(name="LocationZipcode", type="string", length=8, nullable=false)
     */
    private $locationzipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="LocationCity", type="string", length=100, nullable=false)
     */
    private $locationcity;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Firstname", type="string", length=100, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="Lastname", type="string", length=100, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=100, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=100, nullable=false)
     */
    private $phone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MaxAmountOfOffers", type="integer", nullable=true)
     */
    private $maxamountofoffers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTimePosted", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datetimeposted = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateTimeReviewed", type="datetime", nullable=true)
     */
    private $datetimereviewed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IsAccepted", type="integer", nullable=true)
     */
    private $isaccepted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReviewedBy", type="string", length=100, nullable=true)
     */
    private $reviewedby;

    /**
     * @var string
     *
     * @ORM\Column(name="GuidPrivate", type="string", length=100, nullable=false)
     */
    private $guidprivate;

    /**
     * @var string
     *
     * @ORM\Column(name="GuidPublic", type="string", length=100, nullable=false)
     */
    private $guidpublic;

    /**
     * @var int
     *
     * @ORM\Column(name="CategoryId", type="integer", nullable=false)
     */
    private $categoryid;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVerifiedByMail", type="boolean", nullable=false)
     */
    private $isverifiedbymail = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IsActive", type="integer", nullable=false, options={"default"="1"})
     */
    private $isactive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="IsCanceled", type="integer", nullable=false)
     */
    private $iscanceled = '0';


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
     * Set locationzipcode.
     *
     * @param string $locationzipcode
     *
     * @return Request
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
     * @param string $locationcity
     *
     * @return Request
     */
    public function setLocationcity($locationcity)
    {
        $this->locationcity = $locationcity;

        return $this;
    }

    /**
     * Get locationcity.
     *
     * @return string
     */
    public function getLocationcity()
    {
        return $this->locationcity;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Request
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return Request
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return Request
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return Request
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
     * Set phone.
     *
     * @param string $phone
     *
     * @return Request
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set maxamountofoffers.
     *
     * @param int|null $maxamountofoffers
     *
     * @return Request
     */
    public function setMaxamountofoffers($maxamountofoffers = null)
    {
        $this->maxamountofoffers = $maxamountofoffers;

        return $this;
    }

    /**
     * Get maxamountofoffers.
     *
     * @return int|null
     */
    public function getMaxamountofoffers()
    {
        return $this->maxamountofoffers;
    }

    /**
     * Set datetimeposted.
     *
     * @param \DateTime $datetimeposted
     *
     * @return Request
     */
    public function setDatetimeposted($datetimeposted)
    {
        $this->datetimeposted = $datetimeposted;

        return $this;
    }

    /**
     * Get datetimeposted.
     *
     * @return \DateTime
     */
    public function getDatetimeposted()
    {
        return $this->datetimeposted;
    }

    /**
     * Set datetimereviewed.
     *
     * @param \DateTime|null $datetimereviewed
     *
     * @return Request
     */
    public function setDatetimereviewed($datetimereviewed = null)
    {
        $this->datetimereviewed = $datetimereviewed;

        return $this;
    }

    /**
     * Get datetimereviewed.
     *
     * @return \DateTime|null
     */
    public function getDatetimereviewed()
    {
        return $this->datetimereviewed;
    }

    /**
     * Set isaccepted.
     *
     * @param int|null $isaccepted
     *
     * @return Request
     */
    public function setIsaccepted($isaccepted = null)
    {
        $this->isaccepted = $isaccepted;

        return $this;
    }

    /**
     * Get isaccepted.
     *
     * @return int|null
     */
    public function getIsaccepted()
    {
        return $this->isaccepted;
    }

    /**
     * Set reviewedby.
     *
     * @param string|null $reviewedby
     *
     * @return Request
     */
    public function setReviewedby($reviewedby = null)
    {
        $this->reviewedby = $reviewedby;

        return $this;
    }

    /**
     * Get reviewedby.
     *
     * @return string|null
     */
    public function getReviewedby()
    {
        return $this->reviewedby;
    }

    /**
     * Set guidprivate.
     *
     * @param string $guidprivate
     *
     * @return Request
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

    /**
     * Set guidpublic.
     *
     * @param string $guidpublic
     *
     * @return Request
     */
    public function setGuidpublic($guidpublic)
    {
        $this->guidpublic = $guidpublic;

        return $this;
    }

    /**
     * Get guidpublic.
     *
     * @return string
     */
    public function getGuidpublic()
    {
        return $this->guidpublic;
    }

    /**
     * Set categoryid.
     *
     * @param int $categoryid
     *
     * @return Request
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid.
     *
     * @return int
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set isverifiedbymail.
     *
     * @param bool $isverifiedbymail
     *
     * @return Request
     */
    public function setIsverifiedbymail($isverifiedbymail)
    {
        $this->isverifiedbymail = $isverifiedbymail;

        return $this;
    }

    /**
     * Get isverifiedbymail.
     *
     * @return bool
     */
    public function getIsverifiedbymail()
    {
        return $this->isverifiedbymail;
    }

    /**
     * Set isactive.
     *
     * @param int $isactive
     *
     * @return Request
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive.
     *
     * @return int
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set iscanceled.
     *
     * @param int $iscanceled
     *
     * @return Request
     */
    public function setIscanceled($iscanceled)
    {
        $this->iscanceled = $iscanceled;

        return $this;
    }

    /**
     * Get iscanceled.
     *
     * @return int
     */
    public function getIscanceled()
    {
        return $this->iscanceled;
    }
}
