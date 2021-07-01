<?php
namespace AHT\UploadLogo\Plugin;

class DefaultFavicon
{
    const IMAGE_FIELD = 'upload_logo/logo/custom_favicon_upload';
     /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    protected $scopeConfig;
    
    
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }
    
    public function afterGetDefaultFavicon(\Magento\Theme\Model\Favicon\Favicon $subject, $result)
    {
        $faviconURL = $this->scopeConfig->getValue(self::IMAGE_FIELD,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return "Magento_Theme::".$faviconURL;
    }
}
