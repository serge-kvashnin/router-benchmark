<?php

declare(strict_types=1);

/**
 * Do not edit! This file is generated from `src/Generator/PseudoApi.php`
 * by `src/Generator/generate.php` script.
 */

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

return static function (RouteCollection $routes): void {
    $routes->add('r_0', new Route(path: '/users', methods: ['GET']));
    $routes->add('r_1', new Route(path: '/users/{username<[a-zA-Z0-9-_]+>}', methods: ['GET']));
    $routes->add('r_2', new Route(path: '/user', methods: ['PATCH']));
    $routes->add('r_3', new Route(path: '/user/repos', methods: ['GET']));
    $routes->add('r_4', new Route(path: '/users/{username<[a-zA-Z0-9-_]+>}/repos', methods: ['GET']));
    $routes->add('r_5', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}', methods: ['GET']));
    $routes->add('r_6', new Route(path: '/user/repos', methods: ['POST']));
    $routes->add('r_7', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}', methods: ['PATCH']));
    $routes->add('r_8', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}', methods: ['DELETE']));
    $routes->add('r_9', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/issues', methods: ['GET']));
    $routes->add('r_10', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/issues/{number<\d+>}', methods: ['GET']));
    $routes->add('r_11', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/issues', methods: ['POST']));
    $routes->add('r_12', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/issues/{number<\d+>}', methods: ['PATCH']));
    $routes->add('r_13', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/issues/{number<\d+>}', methods: ['DELETE']));
    $routes->add('r_14', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/pulls', methods: ['GET']));
    $routes->add('r_15', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/pulls/{number<\d+>}', methods: ['GET']));
    $routes->add('r_16', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/pulls', methods: ['POST']));
    $routes->add('r_17', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/pulls/{number<\d+>}', methods: ['PATCH']));
    $routes->add('r_18', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/commits', methods: ['GET']));
    $routes->add('r_19', new Route(path: '/repos/{owner<[a-zA-Z0-9-_]+>}/{repo<[a-zA-Z0-9-_]+>}/commits/{sha<[a-zA-Z0-9]+>}', methods: ['GET']));
    $routes->add('r_20', new Route(path: '/gists', methods: ['GET']));
    $routes->add('r_21', new Route(path: '/gists/{gist_id<[a-zA-Z0-9]+>}', methods: ['GET']));
    $routes->add('r_22', new Route(path: '/gists', methods: ['POST']));
    $routes->add('r_23', new Route(path: '/gists/{gist_id<[a-zA-Z0-9]+>}', methods: ['PATCH']));
    $routes->add('r_24', new Route(path: '/gists/{gist_id<[a-zA-Z0-9]+>}', methods: ['DELETE']));
    $routes->add('r_25', new Route(path: '/s3/buckets', methods: ['GET']));
    $routes->add('r_26', new Route(path: '/s3/buckets', methods: ['POST']));
    $routes->add('r_27', new Route(path: '/s3/buckets/{bucketName<[a-zA-Z0-9-_]+>}', methods: ['DELETE']));
    $routes->add('r_28', new Route(path: '/s3/buckets/{bucketName<[a-zA-Z0-9-_]+>}/objects', methods: ['GET']));
    $routes->add('r_29', new Route(path: '/s3/buckets/{bucketName<[a-zA-Z0-9-_]+>}/objects', methods: ['POST']));
    $routes->add('r_30', new Route(path: '/ec2/instances', methods: ['GET']));
    $routes->add('r_31', new Route(path: '/ec2/instances', methods: ['POST']));
    $routes->add('r_32', new Route(path: '/ec2/instances/{instanceId<i-\d+>}', methods: ['DELETE']));
    $routes->add('r_33', new Route(path: '/ec2/volumes', methods: ['GET']));
    $routes->add('r_34', new Route(path: '/ec2/volumes', methods: ['POST']));
    $routes->add('r_35', new Route(path: '/ec2/volumes/{volumeId<vol-\d+>}', methods: ['DELETE']));
    $routes->add('r_36', new Route(path: '/lambda/functions', methods: ['GET']));
    $routes->add('r_37', new Route(path: '/lambda/functions', methods: ['POST']));
    $routes->add('r_38', new Route(path: '/lambda/functions/{functionName<[a-zA-Z0-9-_]+>}', methods: ['DELETE']));
    $routes->add('r_39', new Route(path: '/lambda/functions/{functionName<[a-zA-Z0-9-_]+>}/invoke', methods: ['POST']));
    $routes->add('r_40', new Route(path: '/customers', methods: ['GET']));
    $routes->add('r_41', new Route(path: '/customers', methods: ['POST']));
    $routes->add('r_42', new Route(path: '/customers/{customerId<\d+>}', methods: ['GET']));
    $routes->add('r_43', new Route(path: '/customers/{customerId<\d+>}', methods: ['PUT']));
    $routes->add('r_44', new Route(path: '/customers/{customerId<\d+>}', methods: ['DELETE']));
    $routes->add('r_45', new Route(path: '/products', methods: ['GET']));
    $routes->add('r_46', new Route(path: '/products', methods: ['POST']));
    $routes->add('r_47', new Route(path: '/products/{productId<\d+>}', methods: ['GET']));
    $routes->add('r_48', new Route(path: '/products/{productId<\d+>}', methods: ['PUT']));
    $routes->add('r_49', new Route(path: '/products/{productId<\d+>}', methods: ['DELETE']));
    $routes->add('r_50', new Route(path: '/products/{productId<\d+>}/reviews', methods: ['GET']));
    $routes->add('r_51', new Route(path: '/customers/{customerId<\d+>}/orders', methods: ['GET']));
    $routes->add('r_52', new Route(path: '/customers/{customerId<\d+>}/orders', methods: ['POST']));
    $routes->add('r_53', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}', methods: ['GET']));
    $routes->add('r_54', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}', methods: ['PUT']));
    $routes->add('r_55', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}', methods: ['DELETE']));
    $routes->add('r_56', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}/items', methods: ['GET']));
    $routes->add('r_57', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}/items/{itemId<\d+>}', methods: ['GET']));
    $routes->add('r_58', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}/items', methods: ['POST']));
    $routes->add('r_59', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}/items/{itemId<\d+>}', methods: ['PUT']));
    $routes->add('r_60', new Route(path: '/customers/{customerId<\d+>}/orders/{orderId<\d+>}/items/{itemId<\d+>}', methods: ['DELETE']));
    $routes->add('r_61', new Route(path: '/customers/{customerId<\d+>}/cart', methods: ['GET']));
    $routes->add('r_62', new Route(path: '/customers/{customerId<\d+>}/cart/items', methods: ['POST']));
    $routes->add('r_63', new Route(path: '/customers/{customerId<\d+>}/cart/items/{itemId<\d+>}', methods: ['PUT']));
    $routes->add('r_64', new Route(path: '/customers/{customerId<\d+>}/cart/items/{itemId<\d+>}', methods: ['DELETE']));
    $routes->add('r_65', new Route(path: '/coupons', methods: ['GET']));
    $routes->add('r_66', new Route(path: '/coupons', methods: ['POST']));
    $routes->add('r_67', new Route(path: '/coupons/{couponCode<[a-zA-Z0-9-_]+>}', methods: ['GET']));
    $routes->add('r_68', new Route(path: '/coupons/{couponCode<[a-zA-Z0-9-_]+>}', methods: ['PUT']));
    $routes->add('r_69', new Route(path: '/coupons/{couponCode<[a-zA-Z0-9-_]+>}', methods: ['DELETE']));
    $routes->add('r_70', new Route(path: '/categories', methods: ['GET']));
    $routes->add('r_71', new Route(path: '/categories', methods: ['POST']));
    $routes->add('r_72', new Route(path: '/categories/{categoryId<\d+>}', methods: ['GET']));
    $routes->add('r_73', new Route(path: '/categories/{categoryId<\d+>}', methods: ['PUT']));
    $routes->add('r_74', new Route(path: '/categories/{categoryId<\d+>}', methods: ['DELETE']));
    $routes->add('r_75', new Route(path: '/categories/{categoryId<\d+>}/products', methods: ['GET']));
    $routes->add('r_76', new Route(path: '/api/auth/login', methods: ['POST']));
    $routes->add('r_77', new Route(path: '/api/auth/logout', methods: ['POST']));
    $routes->add('r_78', new Route(path: '/api/users/{userId<\d+>}/profile', methods: ['GET']));
    $routes->add('r_79', new Route(path: '/api/users/{userId<\d+>}/accounts', methods: ['GET']));
    $routes->add('r_80', new Route(path: '/api/users/{userId<\d+>}/accounts', methods: ['POST']));
    $routes->add('r_81', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}', methods: ['GET']));
    $routes->add('r_82', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}', methods: ['PUT']));
    $routes->add('r_83', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}', methods: ['DELETE']));
    $routes->add('r_84', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}/transactions', methods: ['GET']));
    $routes->add('r_85', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}/transactions', methods: ['POST']));
    $routes->add('r_86', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}/transactions/{transactionId<\d+>}', methods: ['GET']));
    $routes->add('r_87', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}/transactions/{transactionId<\d+>}', methods: ['PUT']));
    $routes->add('r_88', new Route(path: '/api/users/{userId<\d+>}/accounts/{accountId<\d+>}/transactions/{transactionId<\d+>}', methods: ['DELETE']));
    $routes->add('r_89', new Route(path: '/api/users/{userId<\d+>}/investments', methods: ['GET']));
    $routes->add('r_90', new Route(path: '/api/users/{userId<\d+>}/investments', methods: ['POST']));
    $routes->add('r_91', new Route(path: '/api/users/{userId<\d+>}/investments/{investmentId<\d+>}', methods: ['GET']));
    $routes->add('r_92', new Route(path: '/api/users/{userId<\d+>}/investments/{investmentId<\d+>}', methods: ['PUT']));
    $routes->add('r_93', new Route(path: '/api/users/{userId<\d+>}/investments/{investmentId<\d+>}', methods: ['DELETE']));
    $routes->add('r_94', new Route(path: '/api/users/{userId<\d+>}/loans', methods: ['GET']));
    $routes->add('r_95', new Route(path: '/api/users/{userId<\d+>}/loans', methods: ['POST']));
    $routes->add('r_96', new Route(path: '/api/users/{userId<\d+>}/loans/{loanId<\d+>}', methods: ['GET']));
    $routes->add('r_97', new Route(path: '/api/users/{userId<\d+>}/loans/{loanId<\d+>}', methods: ['PUT']));
    $routes->add('r_98', new Route(path: '/api/users/{userId<\d+>}/loans/{loanId<\d+>}', methods: ['DELETE']));
    $routes->add('r_99', new Route(path: '/api/business/{businessId<\d+>}/audit_trail', methods: ['GET']));
    $routes->add('r_100', new Route(path: '/api/business/{businessId<\d+>}/employees/{employeeId<\d+>}/payroll', methods: ['GET']));
    $routes->add('r_101', new Route(path: '/api/business/{businessId<\d+>}/invoices', methods: ['POST']));
    $routes->add('r_102', new Route(path: '/api/business/{businessId<\d+>}/invoices/{invoiceId<\d+>}', methods: ['GET']));
    $routes->add('r_103', new Route(path: '/api/business/{businessId<\d+>}/invoices/{invoiceId<\d+>}', methods: ['PUT']));
    $routes->add('r_104', new Route(path: '/api/compliance/reports/{year<\d{4}>}/{quarter<Q[1-4]>}', methods: ['GET']));
    $routes->add('r_105', new Route(path: '/internal/fraud_detection/patterns', methods: ['GET']));
    $routes->add('r_106', new Route(path: '/internal/alerts/system', methods: ['POST']));
    $routes->add('r_107', new Route(path: '/payment_intents', methods: ['GET']));
    $routes->add('r_108', new Route(path: '/payment_intents', methods: ['POST']));
    $routes->add('r_109', new Route(path: '/payment_intents/{paymentIntentId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_110', new Route(path: '/payment_intents/{paymentIntentId<[a-z_]+>}', methods: ['PUT']));
    $routes->add('r_111', new Route(path: '/payment_intents/{paymentIntentId<[a-z_]+>}', methods: ['DELETE']));
    $routes->add('r_112', new Route(path: '/charges', methods: ['GET']));
    $routes->add('r_113', new Route(path: '/charges', methods: ['POST']));
    $routes->add('r_114', new Route(path: '/charges/{chargeId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_115', new Route(path: '/charges/{chargeId<[a-z_]+>}', methods: ['PUT']));
    $routes->add('r_116', new Route(path: '/subscriptions', methods: ['GET']));
    $routes->add('r_117', new Route(path: '/subscriptions', methods: ['POST']));
    $routes->add('r_118', new Route(path: '/subscriptions/{subscriptionId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_119', new Route(path: '/subscriptions/{subscriptionId<[a-z_]+>}', methods: ['DELETE']));
    $routes->add('r_120', new Route(path: '/subscriptions/{subscriptionId<[a-z_]+>}', methods: ['PUT']));
    $routes->add('r_121', new Route(path: '/invoices', methods: ['GET']));
    $routes->add('r_122', new Route(path: '/invoices', methods: ['POST']));
    $routes->add('r_123', new Route(path: '/invoices/{invoiceId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_124', new Route(path: '/invoices/{invoiceId<[a-z_]+>}', methods: ['PUT']));
    $routes->add('r_125', new Route(path: '/invoices/{invoiceId<[a-z_]+>}', methods: ['DELETE']));
    $routes->add('r_126', new Route(path: '/plans', methods: ['GET']));
    $routes->add('r_127', new Route(path: '/plans', methods: ['POST']));
    $routes->add('r_128', new Route(path: '/plans/{planId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_129', new Route(path: '/plans/{planId<[a-z_]+>}', methods: ['PUT']));
    $routes->add('r_130', new Route(path: '/plans/{planId<[a-z_]+>}', methods: ['DELETE']));
    $routes->add('r_131', new Route(path: '/refunds', methods: ['GET']));
    $routes->add('r_132', new Route(path: '/refunds', methods: ['POST']));
    $routes->add('r_133', new Route(path: '/refunds/{refundId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_134', new Route(path: '/events', methods: ['GET']));
    $routes->add('r_135', new Route(path: '/events/{eventId<[a-z_]+>}', methods: ['GET']));
    $routes->add('r_136', new Route(path: '/boards', methods: ['GET']));
    $routes->add('r_137', new Route(path: '/boards', methods: ['POST']));
    $routes->add('r_138', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}', methods: ['GET']));
    $routes->add('r_139', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}', methods: ['PUT']));
    $routes->add('r_140', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}', methods: ['DELETE']));
    $routes->add('r_141', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/elements', methods: ['GET']));
    $routes->add('r_142', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/elements', methods: ['POST']));
    $routes->add('r_143', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/elements/{elementId<[0-9a-f]{24}>}', methods: ['GET']));
    $routes->add('r_144', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/elements/{elementId<[0-9a-f]{24}>}', methods: ['PUT']));
    $routes->add('r_145', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/elements/{elementId<[0-9a-f]{24}>}', methods: ['DELETE']));
    $routes->add('r_146', new Route(path: '/teams', methods: ['GET']));
    $routes->add('r_147', new Route(path: '/teams', methods: ['POST']));
    $routes->add('r_148', new Route(path: '/teams/{teamId<[0-9a-f]{24}>}', methods: ['GET']));
    $routes->add('r_149', new Route(path: '/teams/{teamId<[0-9a-f]{24}>}', methods: ['PUT']));
    $routes->add('r_150', new Route(path: '/teams/{teamId<[0-9a-f]{24}>}', methods: ['DELETE']));
    $routes->add('r_151', new Route(path: '/teams/{teamId<[0-9a-f]{24}>}/boards', methods: ['GET']));
    $routes->add('r_152', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/comments', methods: ['GET']));
    $routes->add('r_153', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/comments', methods: ['POST']));
    $routes->add('r_154', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/comments/{commentId<[0-9a-f]{24}>}', methods: ['GET']));
    $routes->add('r_155', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/comments/{commentId<[0-9a-f]{24}>}', methods: ['PUT']));
    $routes->add('r_156', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/comments/{commentId<[0-9a-f]{24}>}', methods: ['DELETE']));
    $routes->add('r_157', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/export', methods: ['GET']));
    $routes->add('r_158', new Route(path: '/boards/{boardId<[0-9a-f]{24}>}/import', methods: ['POST']));
    $routes->add('r_159', new Route(path: '/api/users/{userId<\d+>}/devices', methods: ['GET']));
    $routes->add('r_160', new Route(path: '/api/users/{userId<\d+>}/devices', methods: ['POST']));
    $routes->add('r_161', new Route(path: '/api/users/{userId<\d+>}/devices/{deviceId<\d+>}', methods: ['GET']));
    $routes->add('r_162', new Route(path: '/api/users/{userId<\d+>}/devices/{deviceId<\d+>}', methods: ['PUT']));
    $routes->add('r_163', new Route(path: '/api/users/{userId<\d+>}/devices/{deviceId<\d+>}', methods: ['DELETE']));
    $routes->add('r_164', new Route(path: '/api/users/{userId<\d+>}/rooms', methods: ['GET']));
    $routes->add('r_165', new Route(path: '/api/users/{userId<\d+>}/rooms', methods: ['POST']));
    $routes->add('r_166', new Route(path: '/api/users/{userId<\d+>}/rooms/{roomId<\d+>}', methods: ['GET']));
    $routes->add('r_167', new Route(path: '/api/users/{userId<\d+>}/rooms/{roomId<\d+>}', methods: ['PUT']));
    $routes->add('r_168', new Route(path: '/api/users/{userId<\d+>}/rooms/{roomId<\d+>}', methods: ['DELETE']));
    $routes->add('r_169', new Route(path: '/api/users/{userId<\d+>}/rooms/{roomId<\d+>}/devices', methods: ['GET']));
    $routes->add('r_170', new Route(path: '/api/users/{userId<\d+>}/rooms/{roomId<\d+>}/devices', methods: ['POST']));
    $routes->add('r_171', new Route(path: '/api/users/{userId<\d+>}/rooms/{roomId<\d+>}/devices/{deviceId<\d+>}/status', methods: ['PUT']));
    $routes->add('r_172', new Route(path: '/api/users/{userId<\d+>}/devices/{deviceId<\d+>}/metrics', methods: ['GET']));
    $routes->add('r_173', new Route(path: '/api/users/{userId<\d+>}/devices/{deviceId<\d+>}/reports/{reportType<daily|monthly|yearly>}', methods: ['GET']));
    $routes->add('r_174', new Route(path: '/api/users/{userId<\d+>}/notifications', methods: ['GET']));
    $routes->add('r_175', new Route(path: '/api/users/{userId<\d+>}/notifications', methods: ['POST']));
    $routes->add('r_176', new Route(path: '/api/users/{userId<\d+>}/notifications/{notificationId<\d+>}', methods: ['GET']));
    $routes->add('r_177', new Route(path: '/api/users/{userId<\d+>}/notifications/{notificationId<\d+>}', methods: ['DELETE']));
    $routes->add('r_178', new Route(path: '/api/users/{userId<\d+>}/scenarios', methods: ['GET']));
    $routes->add('r_179', new Route(path: '/api/users/{userId<\d+>}/scenarios', methods: ['POST']));
    $routes->add('r_180', new Route(path: '/api/users/{userId<\d+>}/scenarios/{scenarioId<\d+>}', methods: ['GET']));
    $routes->add('r_181', new Route(path: '/api/users/{userId<\d+>}/scenarios/{scenarioId<\d+>}', methods: ['PUT']));
    $routes->add('r_182', new Route(path: '/api/users/{userId<\d+>}/scenarios/{scenarioId<\d+>}', methods: ['DELETE']));
    $routes->add('r_183', new Route(path: '/api/users/{userId<\d+>}/voice_commands', methods: ['POST']));
    $routes->add('r_184', new Route(path: '/api/properties', methods: ['GET']));
    $routes->add('r_185', new Route(path: '/api/properties', methods: ['POST']));
    $routes->add('r_186', new Route(path: '/api/properties/{propertyId<\d+>}', methods: ['GET']));
    $routes->add('r_187', new Route(path: '/api/properties/{propertyId<\d+>}', methods: ['PUT']));
    $routes->add('r_188', new Route(path: '/api/properties/{propertyId<\d+>}', methods: ['DELETE']));
    $routes->add('r_189', new Route(path: '/api/properties/{propertyId<\d+>}/rooms', methods: ['GET']));
    $routes->add('r_190', new Route(path: '/api/properties/{propertyId<\d+>}/rooms', methods: ['POST']));
    $routes->add('r_191', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}', methods: ['GET']));
    $routes->add('r_192', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}', methods: ['PUT']));
    $routes->add('r_193', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}', methods: ['DELETE']));
    $routes->add('r_194', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}/bookings', methods: ['GET']));
    $routes->add('r_195', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}/bookings', methods: ['POST']));
    $routes->add('r_196', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}/bookings/{bookingId<\d+>}', methods: ['GET']));
    $routes->add('r_197', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}/bookings/{bookingId<\d+>}', methods: ['PUT']));
    $routes->add('r_198', new Route(path: '/api/properties/{propertyId<\d+>}/rooms/{roomId<\d+>}/bookings/{bookingId<\d+>}', methods: ['DELETE']));
    $routes->add('r_199', new Route(path: '/api/properties/{propertyId<\d+>}/reviews', methods: ['GET']));
    $routes->add('r_200', new Route(path: '/api/properties/{propertyId<\d+>}/reviews', methods: ['POST']));
    $routes->add('r_201', new Route(path: '/api/properties/{propertyId<\d+>}/reviews/{reviewId<\d+>}', methods: ['GET']));
    $routes->add('r_202', new Route(path: '/api/properties/{propertyId<\d+>}/reviews/{reviewId<\d+>}', methods: ['PUT']));
    $routes->add('r_203', new Route(path: '/api/properties/{propertyId<\d+>}/reviews/{reviewId<\d+>}', methods: ['DELETE']));
    $routes->add('r_204', new Route(path: '/api/properties/{propertyId<\d+>}/amenities', methods: ['GET']));
    $routes->add('r_205', new Route(path: '/api/properties/{propertyId<\d+>}/amenities', methods: ['POST']));
    $routes->add('r_206', new Route(path: '/api/properties/{propertyId<\d+>}/amenities/{amenityId<\d+>}', methods: ['GET']));
    $routes->add('r_207', new Route(path: '/api/properties/{propertyId<\d+>}/amenities/{amenityId<\d+>}', methods: ['PUT']));
    $routes->add('r_208', new Route(path: '/api/properties/{propertyId<\d+>}/amenities/{amenityId<\d+>}', methods: ['DELETE']));
    $routes->add('r_209', new Route(path: '/api/users/{userId<\d+>}/payments', methods: ['GET']));
    $routes->add('r_210', new Route(path: '/api/users/{userId<\d+>}/payments', methods: ['POST']));
    $routes->add('r_211', new Route(path: '/api/users/{userId<\d+>}/payments/{paymentId<\d+>}', methods: ['GET']));
    $routes->add('r_212', new Route(path: '/api/v1/{lang<en|de>}/schools/{schoolId<\d+>}/classes/{classId<\d+>}/students/{studentId<\d+>}/grades/{subjectId<\d+>}', methods: ['GET']));
    $routes->add('r_213', new Route(path: '/api/v2/{lang<en|de>}/manufacturers/{manufacturerId<\d+>}/products/{productId<\d+>}/variants/{variantId<\d+>}/reviews', methods: ['POST']));
    $routes->add('r_214', new Route(path: '/api/v1/hotels/{hotelId<\d+>}/rooms/{type<single|double|suite>}/{view<sea|mountain|city>}', methods: ['GET']));
    $routes->add('r_215', new Route(path: '/api/locations/{latitude<-?\d+.\d+>}/{longitude<-?\d+.\d+>}/nearby_stores', methods: ['GET']));
    $routes->add('r_216', new Route(path: '/api/users/{userId<\d+>}/feed/{year<\d{4}>}/{month<\d{2}>}/{day<\d{2}>}', methods: ['GET']));
    $routes->add('r_217', new Route(path: '/api/reports/{reportId<\d+>}/{startDate<\d{4}-\d{2}-\d{2}>}/{endDate<\d{4}-\d{2}-\d{2}>}', methods: ['GET']));
    $routes->add('r_218', new Route(path: '/api/users/{userId<\d+>}/albums/{albumId<\d+>}/photos/upload', methods: ['POST']));
    $routes->add('r_219', new Route(path: '/api/orders/{orderId<\d+>}/payments/{paymentId<\d+>}/confirmation', methods: ['POST']));
    $routes->add('r_220', new Route(path: '/admin/dashboard/{filter<daily|weekly|monthly>}', methods: ['GET']));
    $routes->add('r_221', new Route(path: '/admin/products/{productId<\d+>}/bulk-update', methods: ['POST']));
    $routes->add('r_222', new Route(path: '/api/workflow/{workflowId<\d+>}/stages/{stageId<\d+>}/tasks/{taskId<\d+>}/subtasks/{subtaskId<\d+>}/complete', methods: ['POST']));

};
