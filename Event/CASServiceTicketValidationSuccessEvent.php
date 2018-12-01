<?php

namespace PRayno\CasAuthBundle\Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\EventDispatcher\Event;


class CASServiceTicketValidationSuccessEvent extends Event {

    const POST_MESSAGE = 'cas_auth.service_ticket_validation.success';

    private $request;
    private $serviceTicket;

    public function __construct(Request $request, string $serviceTicket) {
        $this->request = $request;
        $this->serviceTicket = $serviceTicket;
    }
    /**
     * @return Request
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * @return AuthenticationException
     */
    public function getServiceTicket() {
        return $this->serviceTicket;
    }
}