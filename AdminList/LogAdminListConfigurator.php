<?php

namespace Kunstmaan\AdminBundle\AdminList;

use Kunstmaan\AdminListBundle\AdminList\AdminListFilter;
use Kunstmaan\AdminListBundle\AdminList\FilterDefinitions\DateFilterType;
use Kunstmaan\AdminListBundle\AdminList\FilterDefinitions\StringFilterType;
use Kunstmaan\AdminListBundle\AdminList\AbstractAdminListConfigurator;

class LogAdminListConfigurator extends AbstractAdminListConfigurator
{

    /**
     * @param \Kunstmaan\AdminListBundle\AdminList\AdminListFilter $builder
     */
    public function buildFilters(AdminListFilter $builder)
    {
        $builder->add('user', new StringFilterType("user"), "User");
        $builder->add('status', new StringFilterType("status"), "Status");
        $builder->add('message', new StringFilterType("message"), "Message");
        $builder->add('createdat', new DateFilterType("createdat"), "Created At");
    }

    /**
     *
     */
    public function buildFields()
    {
        $this->addField("user", "User", true);
        $this->addField("status", "Status", true);
        $this->addField("message", "Message", true);
        $this->addField("createdat", "Created At", true);
    }

    /**
     * @return bool
     */
    public function canAdd()
    {
        return false;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getAddUrlFor($params = array())
    {
        return array();
    }

    /**
     * @return bool
     */
    public function canEdit()
    {
        return false;
    }

    /**
     * @param $item
     *
     * @return array
     */
    public function getEditUrlFor($item)
    {
        return array();
    }

    /**
     * @return array
     */
    public function getIndexUrlFor()
    {
        return array('path' => 'KunstmaanAdminBundle_settings_logs');
    }

    /**
     * @param $item
     *
     * @return array
     */
    public function getDeleteUrlFor($item)
    {
        return array();
    }

    /**
     * @param $item
     *
     * @return bool
     */
    public function canDelete($item)
    {
        return false;
    }

    /**
     * @param \Kunstmaan\AdminListBundle\AdminList\entity $item
     *
     * @return \Kunstmaan\AdminListBundle\AdminList\AbstractType|null
     */
    public function getAdminType($item)
    {
        return null;
    }

    /**
     * @return string
     */
    public function getRepositoryName()
    {
        return 'KunstmaanAdminBundle:LogItem';
    }
}
