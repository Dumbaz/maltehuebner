<?php

namespace Malte\Skills;

class BikeSkillList extends AbstractSkillList
{
    protected $list = ['Radfahren', 'Radverkehrspolitik', 'Bürgerbeteiligung', 'Critical Mass', 'Fotografie', 'Journalismus', 'Verkehrsrecht'];

    public function __construct()
    {
        $this->merge(new WebSkillList());

        parent::__construct();
    }
}