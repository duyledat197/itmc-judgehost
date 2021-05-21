<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Clarification extends \App\Entity\Clarification implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'clarid', 'externalid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'cid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'respid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'submittime', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'sender_id', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'recipient_id', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'jury_member', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'probid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'queue', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'body', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'answered', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'problem', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'in_reply_to', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'replies', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'sender', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'recipient'];
        }

        return ['__isInitialized__', 'clarid', 'externalid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'cid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'respid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'submittime', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'sender_id', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'recipient_id', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'jury_member', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'probid', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'queue', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'body', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'answered', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'problem', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'in_reply_to', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'replies', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'sender', '' . "\0" . 'App\\Entity\\Clarification' . "\0" . 'recipient'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Clarification $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setClarid($clarid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClarid', [$clarid]);

        return parent::setClarid($clarid);
    }

    /**
     * {@inheritDoc}
     */
    public function getClarid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getClarid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClarid', []);

        return parent::getClarid();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalid($externalid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalid', [$externalid]);

        return parent::setExternalid($externalid);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalid', []);

        return parent::getExternalid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCid($cid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCid', [$cid]);

        return parent::setCid($cid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCid', []);

        return parent::getCid();
    }

    /**
     * {@inheritDoc}
     */
    public function setRespid($respid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRespid', [$respid]);

        return parent::setRespid($respid);
    }

    /**
     * {@inheritDoc}
     */
    public function getRespid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRespid', []);

        return parent::getRespid();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmittime($submittime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmittime', [$submittime]);

        return parent::setSubmittime($submittime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmittime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmittime', []);

        return parent::getSubmittime();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsoluteSubmitTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsoluteSubmitTime', []);

        return parent::getAbsoluteSubmitTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativeSubmitTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelativeSubmitTime', []);

        return parent::getRelativeSubmitTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenderId($senderId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenderId', [$senderId]);

        return parent::setSenderId($senderId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenderId', []);

        return parent::getSenderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipientId($recipientId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecipientId', [$recipientId]);

        return parent::setRecipientId($recipientId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipientId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipientId', []);

        return parent::getRecipientId();
    }

    /**
     * {@inheritDoc}
     */
    public function setJuryMember($juryMember)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJuryMember', [$juryMember]);

        return parent::setJuryMember($juryMember);
    }

    /**
     * {@inheritDoc}
     */
    public function getJuryMember()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJuryMember', []);

        return parent::getJuryMember();
    }

    /**
     * {@inheritDoc}
     */
    public function setProbid($probid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProbid', [$probid]);

        return parent::setProbid($probid);
    }

    /**
     * {@inheritDoc}
     */
    public function getProbid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProbid', []);

        return parent::getProbid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setQueue($queue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQueue', [$queue]);

        return parent::setQueue($queue);
    }

    /**
     * {@inheritDoc}
     */
    public function getQueue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQueue', []);

        return parent::getQueue();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswered($answered)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswered', [$answered]);

        return parent::setAnswered($answered);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswered', []);

        return parent::getAnswered();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblem(\App\Entity\Problem $problem = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblem', [$problem]);

        return parent::setProblem($problem);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblem', []);

        return parent::getProblem();
    }

    /**
     * {@inheritDoc}
     */
    public function setContest(\App\Entity\Contest $contest = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContest', [$contest]);

        return parent::setContest($contest);
    }

    /**
     * {@inheritDoc}
     */
    public function getContest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContest', []);

        return parent::getContest();
    }

    /**
     * {@inheritDoc}
     */
    public function setInReplyTo(\App\Entity\Clarification $inReplyTo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInReplyTo', [$inReplyTo]);

        return parent::setInReplyTo($inReplyTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getInReplyTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInReplyTo', []);

        return parent::getInReplyTo();
    }

    /**
     * {@inheritDoc}
     */
    public function addReply(\App\Entity\Clarification $reply)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReply', [$reply]);

        return parent::addReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReply(\App\Entity\Clarification $reply)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReply', [$reply]);

        return parent::removeReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplies', []);

        return parent::getReplies();
    }

    /**
     * {@inheritDoc}
     */
    public function setSender(\App\Entity\Team $sender = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSender', [$sender]);

        return parent::setSender($sender);
    }

    /**
     * {@inheritDoc}
     */
    public function getSender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSender', []);

        return parent::getSender();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipient(\App\Entity\Team $recipient = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecipient', [$recipient]);

        return parent::setRecipient($recipient);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipient', []);

        return parent::getRecipient();
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalRelationships(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalRelationships', []);

        return parent::getExternalRelationships();
    }

    /**
     * {@inheritDoc}
     */
    public function getSummary(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSummary', []);

        return parent::getSummary();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiIdField(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiIdField', [$eventLogService]);

        return parent::getApiIdField($eventLogService);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiId(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiId', [$eventLogService]);

        return parent::getApiId($eventLogService);
    }

}