<?php

namespace Fridde;

use Maknz\Slack\Client;

class Slacker extends Client
{
    private $settings;
    private $webhook_url;

    /**
     * Slacker constructor.
     */
    public function __construct(array $settings)
    {
        $this->settings['username'] = $settings['username'];
        $this->settings['channel'] = $settings['channel'];
        $this->webhook_url = $settings['webhook_url'];

        parent::__construct($this->webhook_url, $this->settings);
    }
}
