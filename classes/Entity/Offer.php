<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="Offer")
 * @ORM\Entity
 */
class Offer
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
     * @var int
     *
     * @ORM\Column(name="RequestId", type="integer", nullable=false)
     */
    private $requestid;

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
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=100, nullable=true)
     */
    private $phone;

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
     * @var bool|null
     *
     * @ORM\Column(name="IsAccepted", type="boolean", nullable=true)
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
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="IsVerifiedByMail", type="integer", nullable=false)
     */
    private $isverifiedbymail = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="GuidPublic", type="string", length=100, nullable=false)
     */
    private $guidpublic;

    /**
     * @var string
     *
     * @ORM\Column(name="GuidPrivate", type="string", length=100, nullable=false)
     */
    private $guidprivate;

    /**
     * @var int
     *
     * @ORM\Column(name="IsMailed", type="integer", nullable=false)
     */
    private $ismailed = '0';


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
     * Set requestid.
     *
     * @param int $requestid
     *
     * @return Offer
     */
    public function setRequestid($requestid)
    {
        $this->requestid = $requestid;

        return $this;
    }

    /**
     * Get requestid.
     *
     * @return int
     */
    public function getRequestid()
    {
        return $this->requestid;
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return Offer
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
     * @return Offer
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
     * @return Offer
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
     * @param string|null $phone
     *
     * @return Offer
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set datetimeposted.
     *
     * @param \DateTime $datetimeposted
     *
     * @return Offer
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
     * @return Offer
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
     * @param bool|null $isaccepted
     *
     * @return Offer
     */
    public function setIsaccepted($isaccepted = null)
    {
        $this->isaccepted = $isaccepted;

        return $this;
    }

    /**
     * Get isaccepted.
     *
     * @return bool|null
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
     * @return Offer
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
     * Set description.
     *
     * @param string $description
     *
     * @return Offer
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
     * Set isverifiedbymail.
     *
     * @param int $isverifiedbymail
     *
     * @return Offer
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
     * Set guidpublic.
     *
     * @param string $guidpublic
     *
     * @return Offer
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
     * Set guidprivate.
     *
     * @param string $guidprivate
     *
     * @return Offer
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
     * Set ismailed.
     *
     * @param int $ismailed
     *
     * @return Offer
     */
    public function setIsmailed($ismailed)
    {
        $this->ismailed = $ismailed;

        return $this;
    }

    /**
     * Get ismailed.
     *
     * @return int
     */
    public function getIsmailed()
    {
        return $this->ismailed;
    }
}
