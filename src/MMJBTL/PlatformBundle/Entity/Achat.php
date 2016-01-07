<?php

namespace MMJBTL\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="Achat", indexes={@ORM\Index(name="IDX_A1B3A884D7B589C1", columns={"Code_Abonné"})})
 * @ORM\Entity
 */
class Achat
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="Code_Achat", type="integer", nullable=false)
     */
    private $codeAchat;

    /**
     * @var \Enregistrement
     *
     * @ORM\OneToOne(targetEntity="Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeEnregistrement;

    /**
     * @var \Abonné
     *
     * @ORM\ManyToOne(targetEntity="Abonné")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Abonné", referencedColumnName="Code_Abonné")
     * })
     */
    private $codeAbonné;


    /**
     * Set codeEnregistrement
     *
     * @param integer $codeEnregistrement
     *
     * @return \Achat
     */
    public function setCodeEnregistrement(\Enregistrement $codeEnregistrement)
    {
        $this->codeEnregistrement = $codeEnregistrement;

        return $this;
    }

    /**
     * Get codeEnregistrement
     *
     * @return integer
     */
    public function getCodeEnregistrement()
    {
        return $this->codeEnregistrement;
    }

    /**
     * Set codeAchat
     *
     * @param \Achat $codeAchat
     *
     * @return \Achat
     */
    public function setCodeAchat(\Achat $codeAchat)
    {
        $this->codeAchat = $codeAchat;

        return $this;
    }

    /**
     * Get codeAchat
     *
     * @return \Achat
     */
    public function getCodeAchat()
    {
        return $this->codeAchat;
    }

    /**
     * Set codeAbonné
     *
     * @param \Abonné $codeAbonné
     *
     * @return \Abonné
     */
    public function setCodeAbonné(\Abonné $codeAbonné = null)
    {
        $this->codeAbonné = $codeAbonné;

        return $this;
    }

    /**
     * Get codeAbonné
     *
     * @return \Abonné
     */
    public function getCodeAbonné()
    {
        return $this->codeAbonné;
    }
}
