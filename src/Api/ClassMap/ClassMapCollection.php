<?php namespace Pyramid\Api\Classmap;

use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ClassMapCollection
{

    public static function getCollection()
    {
        return new \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection([
          new ClassMap('ElineGetArtRequest', \Pyramid\Api\Type\ElineGetArtRequest::class),
          new ClassMap('ElineGetArtListRequest', \Pyramid\Api\Type\ElineGetArtListRequest::class),
          new ClassMap('ElineInitRegFormRequest', \Pyramid\Api\Type\ElineInitRegFormRequest::class),
          new ClassMap('ElineRegisterRegFormRequest', \Pyramid\Api\Type\ElineRegisterRegFormRequest::class),
          new ClassMap('Data', \Pyramid\Api\Type\Data::class),
          new ClassMap('ElineInitLoginRequest', \Pyramid\Api\Type\ElineInitLoginRequest::class),
          new ClassMap('ElineCheckLoginRequest', \Pyramid\Api\Type\ElineCheckLoginRequest::class),
          new ClassMap('ElineGoToMainCartRequest', \Pyramid\Api\Type\ElineGoToMainCartRequest::class),
          new ClassMap('ElineGoToMainCartNotLoggedInRequest', \Pyramid\Api\Type\ElineGoToMainCartNotLoggedInRequest::class),
          new ClassMap('ElineInitContactFormRequest', \Pyramid\Api\Type\ElineInitContactFormRequest::class),
          new ClassMap('ElineRegisterContactFormRequest', \Pyramid\Api\Type\ElineRegisterContactFormRequest::class),
          new ClassMap('ElineAddToCartRequest', \Pyramid\Api\Type\ElineAddToCartRequest::class),
          new ClassMap('ElineAddToCartVarMatrixRequest', \Pyramid\Api\Type\ElineAddToCartVarMatrixRequest::class),
          new ClassMap('ElineChangeCartRequest', \Pyramid\Api\Type\ElineChangeCartRequest::class),
          new ClassMap('ElineUpdateCartRequest', \Pyramid\Api\Type\ElineUpdateCartRequest::class),
          new ClassMap('ElineSendOrderRequest', \Pyramid\Api\Type\ElineSendOrderRequest::class),
          new ClassMap('ElineRecoverPasswordRequest', \Pyramid\Api\Type\ElineRecoverPasswordRequest::class),
          new ClassMap('ElineInitUserInformationRequest', \Pyramid\Api\Type\ElineInitUserInformationRequest::class),
          new ClassMap('ElineUpdateUserInformationRequest', \Pyramid\Api\Type\ElineUpdateUserInformationRequest::class),
          new ClassMap('ElineInitUserBonusRequest', \Pyramid\Api\Type\ElineInitUserBonusRequest::class),
          new ClassMap('ElineInitUserOrderOverviewRequest', \Pyramid\Api\Type\ElineInitUserOrderOverviewRequest::class),
          new ClassMap('ElineAttestOrderRequest', \Pyramid\Api\Type\ElineAttestOrderRequest::class),
          new ClassMap('ElineDeleteOrderRequest', \Pyramid\Api\Type\ElineDeleteOrderRequest::class),
          new ClassMap('ElineInitUserOrderRequest', \Pyramid\Api\Type\ElineInitUserOrderRequest::class),
          new ClassMap('ElineInitUserDeliveryRequest', \Pyramid\Api\Type\ElineInitUserDeliveryRequest::class),
          new ClassMap('ElineInitUserSubscriptionRequest', \Pyramid\Api\Type\ElineInitUserSubscriptionRequest::class),
          new ClassMap('ElineUpdateUserSubscriptionRequest', \Pyramid\Api\Type\ElineUpdateUserSubscriptionRequest::class),
          new ClassMap('ElineCheckOrderRequest', \Pyramid\Api\Type\ElineCheckOrderRequest::class),
          new ClassMap('ElineSearchRequest', \Pyramid\Api\Type\ElineSearchRequest::class),
          new ClassMap('ElineSearchEANRequest', \Pyramid\Api\Type\ElineSearchEANRequest::class),
          new ClassMap('ElineCopyOrderRequest', \Pyramid\Api\Type\ElineCopyOrderRequest::class),
          new ClassMap('ElineActivateCampaignRequest', \Pyramid\Api\Type\ElineActivateCampaignRequest::class),
          new ClassMap('ElineCheckExpressOrderRequest', \Pyramid\Api\Type\ElineCheckExpressOrderRequest::class),
          new ClassMap('ElineAddItemsToCartRequest', \Pyramid\Api\Type\ElineAddItemsToCartRequest::class),
          new ClassMap('ElineSaveFavouriteListRequest', \Pyramid\Api\Type\ElineSaveFavouriteListRequest::class),
          new ClassMap('ElineDeleteFavouriteListRequest', \Pyramid\Api\Type\ElineDeleteFavouriteListRequest::class),
          new ClassMap('ElineGetFavouriteListsRequest', \Pyramid\Api\Type\ElineGetFavouriteListsRequest::class),
          new ClassMap('ElineProductQuestionRequest', \Pyramid\Api\Type\ElineProductQuestionRequest::class),
          new ClassMap('ElineInitUserInvoiceOverviewRequest', \Pyramid\Api\Type\ElineInitUserInvoiceOverviewRequest::class),
          new ClassMap('ElineInitUserInvoiceRequest', \Pyramid\Api\Type\ElineInitUserInvoiceRequest::class),
          new ClassMap('ElineInitRequestInfoRequest', \Pyramid\Api\Type\ElineInitRequestInfoRequest::class),
          new ClassMap('ElineRegisterRequestInfoRequest', \Pyramid\Api\Type\ElineRegisterRequestInfoRequest::class),
          new ClassMap('ElineInitUserOrderPricelistRequest', \Pyramid\Api\Type\ElineInitUserOrderPricelistRequest::class),
          new ClassMap('ElineUserOrderPricelistRequest', \Pyramid\Api\Type\ElineUserOrderPricelistRequest::class),
          new ClassMap('ElineInitLinksRequest', \Pyramid\Api\Type\ElineInitLinksRequest::class),
          new ClassMap('ElineInitNewsRequest', \Pyramid\Api\Type\ElineInitNewsRequest::class),
          new ClassMap('ElineInitSupportComplaintRequest', \Pyramid\Api\Type\ElineInitSupportComplaintRequest::class),
          new ClassMap('ElineRegisterSupportComplaintRequest', \Pyramid\Api\Type\ElineRegisterSupportComplaintRequest::class),
          new ClassMap('ElineInitUserSerialNoOverviewRequest', \Pyramid\Api\Type\ElineInitUserSerialNoOverviewRequest::class),
          new ClassMap('ElineInitUserSerialNoRequest', \Pyramid\Api\Type\ElineInitUserSerialNoRequest::class),
          new ClassMap('ElineInitUserServiceRegRequest', \Pyramid\Api\Type\ElineInitUserServiceRegRequest::class),
          new ClassMap('ElineUserRegServiceRegRequest', \Pyramid\Api\Type\ElineUserRegServiceRegRequest::class),
          new ClassMap('ElineInitUserMeterReadingRequest', \Pyramid\Api\Type\ElineInitUserMeterReadingRequest::class),
          new ClassMap('ElineUserRegMeterReadingRequest', \Pyramid\Api\Type\ElineUserRegMeterReadingRequest::class),
          new ClassMap('ElineGetProductRatingsRequest', \Pyramid\Api\Type\ElineGetProductRatingsRequest::class),
          new ClassMap('ElineSaveProductRatingRequest', \Pyramid\Api\Type\ElineSaveProductRatingRequest::class),
          new ClassMap('ElineKlarnaStatusRequest', \Pyramid\Api\Type\ElineKlarnaStatusRequest::class),
          new ClassMap('ElinePBSConnectionOKRequest', \Pyramid\Api\Type\ElinePBSConnectionOKRequest::class),
          new ClassMap('ElineGetAddressCSRequest', \Pyramid\Api\Type\ElineGetAddressCSRequest::class),
          new ClassMap('ElineIpGetCustomerListRequest', \Pyramid\Api\Type\ElineIpGetCustomerListRequest::class),
          new ClassMap('ElineIpGetCustomerRequest', \Pyramid\Api\Type\ElineIpGetCustomerRequest::class),
          new ClassMap('ElineIpUpdateCustomerRequest', \Pyramid\Api\Type\ElineIpUpdateCustomerRequest::class),
          new ClassMap('ElineIpRegisterCustomerRequest', \Pyramid\Api\Type\ElineIpRegisterCustomerRequest::class),
          new ClassMap('ElineIpCSSearchCompanyRequest', \Pyramid\Api\Type\ElineIpCSSearchCompanyRequest::class),
          new ClassMap('ElineIpGetTablesRequest', \Pyramid\Api\Type\ElineIpGetTablesRequest::class),
          new ClassMap('ElineIpGetContactsForCustomerRequest', \Pyramid\Api\Type\ElineIpGetContactsForCustomerRequest::class),
          new ClassMap('ElineIpGetContactRequest', \Pyramid\Api\Type\ElineIpGetContactRequest::class),
          new ClassMap('ElineIpRegisterContactRequest', \Pyramid\Api\Type\ElineIpRegisterContactRequest::class),
          new ClassMap('ElineIpGetNavTreeRequest', \Pyramid\Api\Type\ElineIpGetNavTreeRequest::class),
          new ClassMap('ElineIpCheckLoginRequest', \Pyramid\Api\Type\ElineIpCheckLoginRequest::class),
          new ClassMap('ElineBackInStockRequest', \Pyramid\Api\Type\ElineBackInStockRequest::class),
          new ClassMap('ElineSysvaktCommandRequest', \Pyramid\Api\Type\ElineSysvaktCommandRequest::class),
          new ClassMap('RetailGetStoreItemRequest', \Pyramid\Api\Type\RetailGetStoreItemRequest::class),
          new ClassMap('RetailCreatePurchaseRequest', \Pyramid\Api\Type\RetailCreatePurchaseRequest::class),
          new ClassMap('ExampleGetArtNameRequest', \Pyramid\Api\Type\ExampleGetArtNameRequest::class),
          new ClassMap('ExampleGetSuppliersArtNameRequest', \Pyramid\Api\Type\ExampleGetSuppliersArtNameRequest::class),
          new ClassMap('CreateOrderRequest', \Pyramid\Api\Type\CreateOrderRequest::class),
          new ClassMap('ConfirmPurchaseRequest', \Pyramid\Api\Type\ConfirmPurchaseRequest::class),
          new ClassMap('PbsCreateSupportCaseRequest', \Pyramid\Api\Type\PbsCreateSupportCaseRequest::class),
          new ClassMap('PBSWebServiceTestRequest', \Pyramid\Api\Type\PBSWebServiceTestRequest::class),
          new ClassMap('custHistRequest', \Pyramid\Api\Type\CustHistRequest::class),
          new ClassMap('getOrdersRequest', \Pyramid\Api\Type\GetOrdersRequest::class),
          new ClassMap('getOrderRowsRequest', \Pyramid\Api\Type\GetOrderRowsRequest::class),
          new ClassMap('GetPriceRequest', \Pyramid\Api\Type\GetPriceRequest::class),
          new ClassMap('getQuantitysRequest', \Pyramid\Api\Type\GetQuantitysRequest::class),
          new ClassMap('repTimeRequest', \Pyramid\Api\Type\RepTimeRequest::class),
          new ClassMap('repArtRequest', \Pyramid\Api\Type\RepArtRequest::class),
          new ClassMap('sendActRequest', \Pyramid\Api\Type\SendActRequest::class),
          new ClassMap('getActRequest', \Pyramid\Api\Type\GetActRequest::class),
          new ClassMap('getOrderInfoRequest', \Pyramid\Api\Type\GetOrderInfoRequest::class),
          new ClassMap('getCustAppInfoRequest', \Pyramid\Api\Type\GetCustAppInfoRequest::class),
          new ClassMap('getLoginRequest', \Pyramid\Api\Type\GetLoginRequest::class),
          new ClassMap('getArticlesRequest', \Pyramid\Api\Type\GetArticlesRequest::class),
          new ClassMap('repActRequest', \Pyramid\Api\Type\RepActRequest::class),
          new ClassMap('regOrderRequest', \Pyramid\Api\Type\RegOrderRequest::class),
          new ClassMap('getCustomersRequest', \Pyramid\Api\Type\GetCustomersRequest::class),
          new ClassMap('repProjectstatusRequest', \Pyramid\Api\Type\RepProjectstatusRequest::class),
          new ClassMap('repOrdertextRequest', \Pyramid\Api\Type\RepOrdertextRequest::class),
          new ClassMap('getRepTimeRequest', \Pyramid\Api\Type\GetRepTimeRequest::class),
          new ClassMap('setInTimeRequest', \Pyramid\Api\Type\SetInTimeRequest::class),
          new ClassMap('setOutTimeRequest', \Pyramid\Api\Type\SetOutTimeRequest::class),
          new ClassMap('getAllStampRequest', \Pyramid\Api\Type\GetAllStampRequest::class),
          new ClassMap('getInvoiceNumberRequest', \Pyramid\Api\Type\GetInvoiceNumberRequest::class),
          new ClassMap('ElineGetArtResponse', \Pyramid\Api\Type\ElineGetArtResponse::class),
          new ClassMap('Result', \Pyramid\Api\Type\Result::class),
          new ClassMap('ElineGetArtListResponse', \Pyramid\Api\Type\ElineGetArtListResponse::class),
          new ClassMap('ElineInitRegFormResponse', \Pyramid\Api\Type\ElineInitRegFormResponse::class),
          new ClassMap('ElineRegisterRegFormResponse', \Pyramid\Api\Type\ElineRegisterRegFormResponse::class),
          new ClassMap('ElineInitLoginResponse', \Pyramid\Api\Type\ElineInitLoginResponse::class),
          new ClassMap('ElineCheckLoginResponse', \Pyramid\Api\Type\ElineCheckLoginResponse::class),
          new ClassMap('ElineGoToMainCartResponse', \Pyramid\Api\Type\ElineGoToMainCartResponse::class),
          new ClassMap('ElineGoToMainCartNotLoggedInResponse', \Pyramid\Api\Type\ElineGoToMainCartNotLoggedInResponse::class),
          new ClassMap('ElineInitContactFormResponse', \Pyramid\Api\Type\ElineInitContactFormResponse::class),
          new ClassMap('ElineRegisterContactFormResponse', \Pyramid\Api\Type\ElineRegisterContactFormResponse::class),
          new ClassMap('ElineAddToCartResponse', \Pyramid\Api\Type\ElineAddToCartResponse::class),
          new ClassMap('ElineAddToCartVarMatrixResponse', \Pyramid\Api\Type\ElineAddToCartVarMatrixResponse::class),
          new ClassMap('ElineChangeCartResponse', \Pyramid\Api\Type\ElineChangeCartResponse::class),
          new ClassMap('ElineUpdateCartResponse', \Pyramid\Api\Type\ElineUpdateCartResponse::class),
          new ClassMap('ElineSendOrderResponse', \Pyramid\Api\Type\ElineSendOrderResponse::class),
          new ClassMap('ElineRecoverPasswordResponse', \Pyramid\Api\Type\ElineRecoverPasswordResponse::class),
          new ClassMap('ElineInitUserInformationResponse', \Pyramid\Api\Type\ElineInitUserInformationResponse::class),
          new ClassMap('ElineUpdateUserInformationResponse', \Pyramid\Api\Type\ElineUpdateUserInformationResponse::class),
          new ClassMap('ElineInitUserBonusResponse', \Pyramid\Api\Type\ElineInitUserBonusResponse::class),
          new ClassMap('ElineInitUserOrderOverviewResponse', \Pyramid\Api\Type\ElineInitUserOrderOverviewResponse::class),
          new ClassMap('ElineAttestOrderResponse', \Pyramid\Api\Type\ElineAttestOrderResponse::class),
          new ClassMap('ElineDeleteOrderResponse', \Pyramid\Api\Type\ElineDeleteOrderResponse::class),
          new ClassMap('ElineInitUserOrderResponse', \Pyramid\Api\Type\ElineInitUserOrderResponse::class),
          new ClassMap('ElineInitUserDeliveryResponse', \Pyramid\Api\Type\ElineInitUserDeliveryResponse::class),
          new ClassMap('ElineInitUserSubscriptionResponse', \Pyramid\Api\Type\ElineInitUserSubscriptionResponse::class),
          new ClassMap('ElineUpdateUserSubscriptionResponse', \Pyramid\Api\Type\ElineUpdateUserSubscriptionResponse::class),
          new ClassMap('ElineCheckOrderResponse', \Pyramid\Api\Type\ElineCheckOrderResponse::class),
          new ClassMap('ElineSearchResponse', \Pyramid\Api\Type\ElineSearchResponse::class),
          new ClassMap('ElineSearchEANResponse', \Pyramid\Api\Type\ElineSearchEANResponse::class),
          new ClassMap('ElineCopyOrderResponse', \Pyramid\Api\Type\ElineCopyOrderResponse::class),
          new ClassMap('ElineActivateCampaignResponse', \Pyramid\Api\Type\ElineActivateCampaignResponse::class),
          new ClassMap('ElineCheckExpressOrderResponse', \Pyramid\Api\Type\ElineCheckExpressOrderResponse::class),
          new ClassMap('ElineAddItemsToCartResponse', \Pyramid\Api\Type\ElineAddItemsToCartResponse::class),
          new ClassMap('ElineSaveFavouriteListResponse', \Pyramid\Api\Type\ElineSaveFavouriteListResponse::class),
          new ClassMap('ElineDeleteFavouriteListResponse', \Pyramid\Api\Type\ElineDeleteFavouriteListResponse::class),
          new ClassMap('ElineGetFavouriteListsResponse', \Pyramid\Api\Type\ElineGetFavouriteListsResponse::class),
          new ClassMap('ElineProductQuestionResponse', \Pyramid\Api\Type\ElineProductQuestionResponse::class),
          new ClassMap('ElineInitUserInvoiceOverviewResponse', \Pyramid\Api\Type\ElineInitUserInvoiceOverviewResponse::class),
          new ClassMap('ElineInitUserInvoiceResponse', \Pyramid\Api\Type\ElineInitUserInvoiceResponse::class),
          new ClassMap('ElineInitRequestInfoResponse', \Pyramid\Api\Type\ElineInitRequestInfoResponse::class),
          new ClassMap('ElineRegisterRequestInfoResponse', \Pyramid\Api\Type\ElineRegisterRequestInfoResponse::class),
          new ClassMap('ElineInitUserOrderPricelistResponse', \Pyramid\Api\Type\ElineInitUserOrderPricelistResponse::class),
          new ClassMap('ElineUserOrderPricelistResponse', \Pyramid\Api\Type\ElineUserOrderPricelistResponse::class),
          new ClassMap('ElineInitLinksResponse', \Pyramid\Api\Type\ElineInitLinksResponse::class),
          new ClassMap('ElineInitNewsResponse', \Pyramid\Api\Type\ElineInitNewsResponse::class),
          new ClassMap('ElineInitSupportComplaintResponse', \Pyramid\Api\Type\ElineInitSupportComplaintResponse::class),
          new ClassMap('ElineRegisterSupportComplaintResponse', \Pyramid\Api\Type\ElineRegisterSupportComplaintResponse::class),
          new ClassMap('ElineInitUserSerialNoOverviewResponse', \Pyramid\Api\Type\ElineInitUserSerialNoOverviewResponse::class),
          new ClassMap('ElineInitUserSerialNoResponse', \Pyramid\Api\Type\ElineInitUserSerialNoResponse::class),
          new ClassMap('ElineInitUserServiceRegResponse', \Pyramid\Api\Type\ElineInitUserServiceRegResponse::class),
          new ClassMap('ElineUserRegServiceRegResponse', \Pyramid\Api\Type\ElineUserRegServiceRegResponse::class),
          new ClassMap('ElineInitUserMeterReadingResponse', \Pyramid\Api\Type\ElineInitUserMeterReadingResponse::class),
          new ClassMap('ElineUserRegMeterReadingResponse', \Pyramid\Api\Type\ElineUserRegMeterReadingResponse::class),
          new ClassMap('ElineGetProductRatingsResponse', \Pyramid\Api\Type\ElineGetProductRatingsResponse::class),
          new ClassMap('ElineSaveProductRatingResponse', \Pyramid\Api\Type\ElineSaveProductRatingResponse::class),
          new ClassMap('ElineKlarnaStatusResponse', \Pyramid\Api\Type\ElineKlarnaStatusResponse::class),
          new ClassMap('ElinePBSConnectionOKResponse', \Pyramid\Api\Type\ElinePBSConnectionOKResponse::class),
          new ClassMap('ElineGetAddressCSResponse', \Pyramid\Api\Type\ElineGetAddressCSResponse::class),
          new ClassMap('ElineIpGetCustomerListResponse', \Pyramid\Api\Type\ElineIpGetCustomerListResponse::class),
          new ClassMap('ElineIpGetCustomerResponse', \Pyramid\Api\Type\ElineIpGetCustomerResponse::class),
          new ClassMap('ElineIpUpdateCustomerResponse', \Pyramid\Api\Type\ElineIpUpdateCustomerResponse::class),
          new ClassMap('ElineIpRegisterCustomerResponse', \Pyramid\Api\Type\ElineIpRegisterCustomerResponse::class),
          new ClassMap('ElineIpCSSearchCompanyResponse', \Pyramid\Api\Type\ElineIpCSSearchCompanyResponse::class),
          new ClassMap('ElineIpGetTablesResponse', \Pyramid\Api\Type\ElineIpGetTablesResponse::class),
          new ClassMap('ElineIpGetContactsForCustomerResponse', \Pyramid\Api\Type\ElineIpGetContactsForCustomerResponse::class),
          new ClassMap('ElineIpGetContactResponse', \Pyramid\Api\Type\ElineIpGetContactResponse::class),
          new ClassMap('ElineIpRegisterContactResponse', \Pyramid\Api\Type\ElineIpRegisterContactResponse::class),
          new ClassMap('ElineIpGetNavTreeResponse', \Pyramid\Api\Type\ElineIpGetNavTreeResponse::class),
          new ClassMap('ElineIpCheckLoginResponse', \Pyramid\Api\Type\ElineIpCheckLoginResponse::class),
          new ClassMap('ElineBackInStockResponse', \Pyramid\Api\Type\ElineBackInStockResponse::class),
          new ClassMap('ElineSysvaktCommandResponse', \Pyramid\Api\Type\ElineSysvaktCommandResponse::class),
          new ClassMap('RetailGetStoreItemResponse', \Pyramid\Api\Type\RetailGetStoreItemResponse::class),
          new ClassMap('RetailCreatePurchaseResponse', \Pyramid\Api\Type\RetailCreatePurchaseResponse::class),
          new ClassMap('ExampleGetArtNameResponse', \Pyramid\Api\Type\ExampleGetArtNameResponse::class),
          new ClassMap('ExampleGetSuppliersArtNameResponse', \Pyramid\Api\Type\ExampleGetSuppliersArtNameResponse::class),
          new ClassMap('CreateOrderResponse', \Pyramid\Api\Type\CreateOrderResponse::class),
          new ClassMap('ConfirmPurchaseResponse', \Pyramid\Api\Type\ConfirmPurchaseResponse::class),
          new ClassMap('PbsCreateSupportCaseResponse', \Pyramid\Api\Type\PbsCreateSupportCaseResponse::class),
          new ClassMap('PBSWebServiceTestResponse', \Pyramid\Api\Type\PBSWebServiceTestResponse::class),
          new ClassMap('custHistResponse', \Pyramid\Api\Type\CustHistResponse::class),
          new ClassMap('getOrdersResponse', \Pyramid\Api\Type\GetOrdersResponse::class),
          new ClassMap('getOrderRowsResponse', \Pyramid\Api\Type\GetOrderRowsResponse::class),
          new ClassMap('GetPriceResponse', \Pyramid\Api\Type\GetPriceResponse::class),
          new ClassMap('getQuantitysResponse', \Pyramid\Api\Type\GetQuantitysResponse::class),
          new ClassMap('repTimeResponse', \Pyramid\Api\Type\RepTimeResponse::class),
          new ClassMap('repArtResponse', \Pyramid\Api\Type\RepArtResponse::class),
          new ClassMap('sendActResponse', \Pyramid\Api\Type\SendActResponse::class),
          new ClassMap('getActResponse', \Pyramid\Api\Type\GetActResponse::class),
          new ClassMap('getOrderInfoResponse', \Pyramid\Api\Type\GetOrderInfoResponse::class),
          new ClassMap('getCustAppInfoResponse', \Pyramid\Api\Type\GetCustAppInfoResponse::class),
          new ClassMap('getLoginResponse', \Pyramid\Api\Type\GetLoginResponse::class),
          new ClassMap('getArticlesResponse', \Pyramid\Api\Type\GetArticlesResponse::class),
          new ClassMap('repActResponse', \Pyramid\Api\Type\RepActResponse::class),
          new ClassMap('regOrderResponse', \Pyramid\Api\Type\RegOrderResponse::class),
          new ClassMap('getCustomersResponse', \Pyramid\Api\Type\GetCustomersResponse::class),
          new ClassMap('repProjectstatusResponse', \Pyramid\Api\Type\RepProjectstatusResponse::class),
          new ClassMap('repOrdertextResponse', \Pyramid\Api\Type\RepOrdertextResponse::class),
          new ClassMap('getRepTimeResponse', \Pyramid\Api\Type\GetRepTimeResponse::class),
          new ClassMap('setInTimeResponse', \Pyramid\Api\Type\SetInTimeResponse::class),
          new ClassMap('setOutTimeResponse', \Pyramid\Api\Type\SetOutTimeResponse::class),
          new ClassMap('getAllStampResponse', \Pyramid\Api\Type\GetAllStampResponse::class),
          new ClassMap('getInvoiceNumberResponse', \Pyramid\Api\Type\GetInvoiceNumberResponse::class),
          new ClassMap('AuthHeader', \Pyramid\Api\Type\AuthHeader::class),
          new ClassMap('OrderRow', \Pyramid\Api\Type\OrderRow::class),
          new ClassMap('PurchaseRow', \Pyramid\Api\Type\PurchaseRow::class),
          new ClassMap('SupplierArtName', \Pyramid\Api\Type\SupplierArtName::class),
          new ClassMap('Enclosure', \Pyramid\Api\Type\Enclosure::class),
          new ClassMap('Recording', \Pyramid\Api\Type\Recording::class),
          new ClassMap('WebService', \Pyramid\Api\Type\WebService::class),
          new ClassMap('WebServiceProgram', \Pyramid\Api\Type\WebServiceProgram::class),
          new ClassMap('ArrayOfOrderRow', \Pyramid\Api\Type\ArrayOfOrderRow::class),
          new ClassMap('ArrayOfPurchaseRow', \Pyramid\Api\Type\ArrayOfPurchaseRow::class),
          new ClassMap('ArrayOfSupplierArtName', \Pyramid\Api\Type\ArrayOfSupplierArtName::class),
          new ClassMap('ArrayOfOrderRows', \Pyramid\Api\Type\ArrayOfOrderRows::class),
          new ClassMap('ArrayOfWebService', \Pyramid\Api\Type\ArrayOfWebService::class),
          new ClassMap('ArrayOfWebServiceProgram', \Pyramid\Api\Type\ArrayOfWebServiceProgram::class),
      ]);
    }
}