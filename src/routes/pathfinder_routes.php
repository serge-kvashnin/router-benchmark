<?php

declare(strict_types=1);

/**
 * Do not edit! This file is generated from `src/Generator/PseudoApi.php`
 * by `src/Generator/generate.php` script.
 */

use Norvica\Pathfinder\Pathfinder;

return static function (Pathfinder $routes): void {
    $routes->route('GET', '/users', 'r_0');
    $routes->route('GET', '/users/{username:[a-zA-Z0-9-_]+}', 'r_1');
    $routes->route('PATCH', '/user', 'r_2');
    $routes->route('GET', '/user/repos', 'r_3');
    $routes->route('GET', '/users/{username:[a-zA-Z0-9-_]+}/repos', 'r_4');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}', 'r_5');
    $routes->route('POST', '/user/repos', 'r_6');
    $routes->route('PATCH', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}', 'r_7');
    $routes->route('DELETE', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}', 'r_8');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/issues', 'r_9');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/issues/{number:\d+}', 'r_10');
    $routes->route('POST', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/issues', 'r_11');
    $routes->route('PATCH', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/issues/{number:\d+}', 'r_12');
    $routes->route('DELETE', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/issues/{number:\d+}', 'r_13');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/pulls', 'r_14');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/pulls/{number:\d+}', 'r_15');
    $routes->route('POST', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/pulls', 'r_16');
    $routes->route('PATCH', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/pulls/{number:\d+}', 'r_17');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/commits', 'r_18');
    $routes->route('GET', '/repos/{owner:[a-zA-Z0-9-_]+}/{repo:[a-zA-Z0-9-_]+}/commits/{sha:[a-zA-Z0-9]+}', 'r_19');
    $routes->route('GET', '/gists', 'r_20');
    $routes->route('GET', '/gists/{gist_id:[a-zA-Z0-9]+}', 'r_21');
    $routes->route('POST', '/gists', 'r_22');
    $routes->route('PATCH', '/gists/{gist_id:[a-zA-Z0-9]+}', 'r_23');
    $routes->route('DELETE', '/gists/{gist_id:[a-zA-Z0-9]+}', 'r_24');
    $routes->route('GET', '/s3/buckets', 'r_25');
    $routes->route('POST', '/s3/buckets', 'r_26');
    $routes->route('DELETE', '/s3/buckets/{bucketName:[a-zA-Z0-9-_]+}', 'r_27');
    $routes->route('GET', '/s3/buckets/{bucketName:[a-zA-Z0-9-_]+}/objects', 'r_28');
    $routes->route('POST', '/s3/buckets/{bucketName:[a-zA-Z0-9-_]+}/objects', 'r_29');
    $routes->route('GET', '/ec2/instances', 'r_30');
    $routes->route('POST', '/ec2/instances', 'r_31');
    $routes->route('DELETE', '/ec2/instances/{instanceId:i-\d+}', 'r_32');
    $routes->route('GET', '/ec2/volumes', 'r_33');
    $routes->route('POST', '/ec2/volumes', 'r_34');
    $routes->route('DELETE', '/ec2/volumes/{volumeId:vol-\d+}', 'r_35');
    $routes->route('GET', '/lambda/functions', 'r_36');
    $routes->route('POST', '/lambda/functions', 'r_37');
    $routes->route('DELETE', '/lambda/functions/{functionName:[a-zA-Z0-9-_]+}', 'r_38');
    $routes->route('POST', '/lambda/functions/{functionName:[a-zA-Z0-9-_]+}/invoke', 'r_39');
    $routes->route('GET', '/customers', 'r_40');
    $routes->route('POST', '/customers', 'r_41');
    $routes->route('GET', '/customers/{customerId:\d+}', 'r_42');
    $routes->route('PUT', '/customers/{customerId:\d+}', 'r_43');
    $routes->route('DELETE', '/customers/{customerId:\d+}', 'r_44');
    $routes->route('GET', '/products', 'r_45');
    $routes->route('POST', '/products', 'r_46');
    $routes->route('GET', '/products/{productId:\d+}', 'r_47');
    $routes->route('PUT', '/products/{productId:\d+}', 'r_48');
    $routes->route('DELETE', '/products/{productId:\d+}', 'r_49');
    $routes->route('GET', '/products/{productId:\d+}/reviews', 'r_50');
    $routes->route('GET', '/customers/{customerId:\d+}/orders', 'r_51');
    $routes->route('POST', '/customers/{customerId:\d+}/orders', 'r_52');
    $routes->route('GET', '/customers/{customerId:\d+}/orders/{orderId:\d+}', 'r_53');
    $routes->route('PUT', '/customers/{customerId:\d+}/orders/{orderId:\d+}', 'r_54');
    $routes->route('DELETE', '/customers/{customerId:\d+}/orders/{orderId:\d+}', 'r_55');
    $routes->route('GET', '/customers/{customerId:\d+}/orders/{orderId:\d+}/items', 'r_56');
    $routes->route('GET', '/customers/{customerId:\d+}/orders/{orderId:\d+}/items/{itemId:\d+}', 'r_57');
    $routes->route('POST', '/customers/{customerId:\d+}/orders/{orderId:\d+}/items', 'r_58');
    $routes->route('PUT', '/customers/{customerId:\d+}/orders/{orderId:\d+}/items/{itemId:\d+}', 'r_59');
    $routes->route('DELETE', '/customers/{customerId:\d+}/orders/{orderId:\d+}/items/{itemId:\d+}', 'r_60');
    $routes->route('GET', '/customers/{customerId:\d+}/cart', 'r_61');
    $routes->route('POST', '/customers/{customerId:\d+}/cart/items', 'r_62');
    $routes->route('PUT', '/customers/{customerId:\d+}/cart/items/{itemId:\d+}', 'r_63');
    $routes->route('DELETE', '/customers/{customerId:\d+}/cart/items/{itemId:\d+}', 'r_64');
    $routes->route('GET', '/coupons', 'r_65');
    $routes->route('POST', '/coupons', 'r_66');
    $routes->route('GET', '/coupons/{couponCode:[a-zA-Z0-9-_]+}', 'r_67');
    $routes->route('PUT', '/coupons/{couponCode:[a-zA-Z0-9-_]+}', 'r_68');
    $routes->route('DELETE', '/coupons/{couponCode:[a-zA-Z0-9-_]+}', 'r_69');
    $routes->route('GET', '/categories', 'r_70');
    $routes->route('POST', '/categories', 'r_71');
    $routes->route('GET', '/categories/{categoryId:\d+}', 'r_72');
    $routes->route('PUT', '/categories/{categoryId:\d+}', 'r_73');
    $routes->route('DELETE', '/categories/{categoryId:\d+}', 'r_74');
    $routes->route('GET', '/categories/{categoryId:\d+}/products', 'r_75');
    $routes->route('POST', '/api/auth/login', 'r_76');
    $routes->route('POST', '/api/auth/logout', 'r_77');
    $routes->route('GET', '/api/users/{userId:\d+}/profile', 'r_78');
    $routes->route('GET', '/api/users/{userId:\d+}/accounts', 'r_79');
    $routes->route('POST', '/api/users/{userId:\d+}/accounts', 'r_80');
    $routes->route('GET', '/api/users/{userId:\d+}/accounts/{accountId:\d+}', 'r_81');
    $routes->route('PUT', '/api/users/{userId:\d+}/accounts/{accountId:\d+}', 'r_82');
    $routes->route('DELETE', '/api/users/{userId:\d+}/accounts/{accountId:\d+}', 'r_83');
    $routes->route('GET', '/api/users/{userId:\d+}/accounts/{accountId:\d+}/transactions', 'r_84');
    $routes->route('POST', '/api/users/{userId:\d+}/accounts/{accountId:\d+}/transactions', 'r_85');
    $routes->route('GET', '/api/users/{userId:\d+}/accounts/{accountId:\d+}/transactions/{transactionId:\d+}', 'r_86');
    $routes->route('PUT', '/api/users/{userId:\d+}/accounts/{accountId:\d+}/transactions/{transactionId:\d+}', 'r_87');
    $routes->route('DELETE', '/api/users/{userId:\d+}/accounts/{accountId:\d+}/transactions/{transactionId:\d+}', 'r_88');
    $routes->route('GET', '/api/users/{userId:\d+}/investments', 'r_89');
    $routes->route('POST', '/api/users/{userId:\d+}/investments', 'r_90');
    $routes->route('GET', '/api/users/{userId:\d+}/investments/{investmentId:\d+}', 'r_91');
    $routes->route('PUT', '/api/users/{userId:\d+}/investments/{investmentId:\d+}', 'r_92');
    $routes->route('DELETE', '/api/users/{userId:\d+}/investments/{investmentId:\d+}', 'r_93');
    $routes->route('GET', '/api/users/{userId:\d+}/loans', 'r_94');
    $routes->route('POST', '/api/users/{userId:\d+}/loans', 'r_95');
    $routes->route('GET', '/api/users/{userId:\d+}/loans/{loanId:\d+}', 'r_96');
    $routes->route('PUT', '/api/users/{userId:\d+}/loans/{loanId:\d+}', 'r_97');
    $routes->route('DELETE', '/api/users/{userId:\d+}/loans/{loanId:\d+}', 'r_98');
    $routes->route('GET', '/api/business/{businessId:\d+}/audit_trail', 'r_99');
    $routes->route('GET', '/api/business/{businessId:\d+}/employees/{employeeId:\d+}/payroll', 'r_100');
    $routes->route('POST', '/api/business/{businessId:\d+}/invoices', 'r_101');
    $routes->route('GET', '/api/business/{businessId:\d+}/invoices/{invoiceId:\d+}', 'r_102');
    $routes->route('PUT', '/api/business/{businessId:\d+}/invoices/{invoiceId:\d+}', 'r_103');
    $routes->route('GET', '/api/compliance/reports/{year:\d{4}}/{quarter:Q[1-4]}', 'r_104');
    $routes->route('GET', '/internal/fraud_detection/patterns', 'r_105');
    $routes->route('POST', '/internal/alerts/system', 'r_106');
    $routes->route('GET', '/payment_intents', 'r_107');
    $routes->route('POST', '/payment_intents', 'r_108');
    $routes->route('GET', '/payment_intents/{paymentIntentId:[a-z_]+}', 'r_109');
    $routes->route('PUT', '/payment_intents/{paymentIntentId:[a-z_]+}', 'r_110');
    $routes->route('DELETE', '/payment_intents/{paymentIntentId:[a-z_]+}', 'r_111');
    $routes->route('GET', '/charges', 'r_112');
    $routes->route('POST', '/charges', 'r_113');
    $routes->route('GET', '/charges/{chargeId:[a-z_]+}', 'r_114');
    $routes->route('PUT', '/charges/{chargeId:[a-z_]+}', 'r_115');
    $routes->route('GET', '/subscriptions', 'r_116');
    $routes->route('POST', '/subscriptions', 'r_117');
    $routes->route('GET', '/subscriptions/{subscriptionId:[a-z_]+}', 'r_118');
    $routes->route('DELETE', '/subscriptions/{subscriptionId:[a-z_]+}', 'r_119');
    $routes->route('PUT', '/subscriptions/{subscriptionId:[a-z_]+}', 'r_120');
    $routes->route('GET', '/invoices', 'r_121');
    $routes->route('POST', '/invoices', 'r_122');
    $routes->route('GET', '/invoices/{invoiceId:[a-z_]+}', 'r_123');
    $routes->route('PUT', '/invoices/{invoiceId:[a-z_]+}', 'r_124');
    $routes->route('DELETE', '/invoices/{invoiceId:[a-z_]+}', 'r_125');
    $routes->route('GET', '/plans', 'r_126');
    $routes->route('POST', '/plans', 'r_127');
    $routes->route('GET', '/plans/{planId:[a-z_]+}', 'r_128');
    $routes->route('PUT', '/plans/{planId:[a-z_]+}', 'r_129');
    $routes->route('DELETE', '/plans/{planId:[a-z_]+}', 'r_130');
    $routes->route('GET', '/refunds', 'r_131');
    $routes->route('POST', '/refunds', 'r_132');
    $routes->route('GET', '/refunds/{refundId:[a-z_]+}', 'r_133');
    $routes->route('GET', '/events', 'r_134');
    $routes->route('GET', '/events/{eventId:[a-z_]+}', 'r_135');
    $routes->route('GET', '/boards', 'r_136');
    $routes->route('POST', '/boards', 'r_137');
    $routes->route('GET', '/boards/{boardId:[0-9a-f]{24}}', 'r_138');
    $routes->route('PUT', '/boards/{boardId:[0-9a-f]{24}}', 'r_139');
    $routes->route('DELETE', '/boards/{boardId:[0-9a-f]{24}}', 'r_140');
    $routes->route('GET', '/boards/{boardId:[0-9a-f]{24}}/elements', 'r_141');
    $routes->route('POST', '/boards/{boardId:[0-9a-f]{24}}/elements', 'r_142');
    $routes->route('GET', '/boards/{boardId:[0-9a-f]{24}}/elements/{elementId:[0-9a-f]{24}}', 'r_143');
    $routes->route('PUT', '/boards/{boardId:[0-9a-f]{24}}/elements/{elementId:[0-9a-f]{24}}', 'r_144');
    $routes->route('DELETE', '/boards/{boardId:[0-9a-f]{24}}/elements/{elementId:[0-9a-f]{24}}', 'r_145');
    $routes->route('GET', '/teams', 'r_146');
    $routes->route('POST', '/teams', 'r_147');
    $routes->route('GET', '/teams/{teamId:[0-9a-f]{24}}', 'r_148');
    $routes->route('PUT', '/teams/{teamId:[0-9a-f]{24}}', 'r_149');
    $routes->route('DELETE', '/teams/{teamId:[0-9a-f]{24}}', 'r_150');
    $routes->route('GET', '/teams/{teamId:[0-9a-f]{24}}/boards', 'r_151');
    $routes->route('GET', '/boards/{boardId:[0-9a-f]{24}}/comments', 'r_152');
    $routes->route('POST', '/boards/{boardId:[0-9a-f]{24}}/comments', 'r_153');
    $routes->route('GET', '/boards/{boardId:[0-9a-f]{24}}/comments/{commentId:[0-9a-f]{24}}', 'r_154');
    $routes->route('PUT', '/boards/{boardId:[0-9a-f]{24}}/comments/{commentId:[0-9a-f]{24}}', 'r_155');
    $routes->route('DELETE', '/boards/{boardId:[0-9a-f]{24}}/comments/{commentId:[0-9a-f]{24}}', 'r_156');
    $routes->route('GET', '/boards/{boardId:[0-9a-f]{24}}/export', 'r_157');
    $routes->route('POST', '/boards/{boardId:[0-9a-f]{24}}/import', 'r_158');
    $routes->route('GET', '/api/users/{userId:\d+}/devices', 'r_159');
    $routes->route('POST', '/api/users/{userId:\d+}/devices', 'r_160');
    $routes->route('GET', '/api/users/{userId:\d+}/devices/{deviceId:\d+}', 'r_161');
    $routes->route('PUT', '/api/users/{userId:\d+}/devices/{deviceId:\d+}', 'r_162');
    $routes->route('DELETE', '/api/users/{userId:\d+}/devices/{deviceId:\d+}', 'r_163');
    $routes->route('GET', '/api/users/{userId:\d+}/rooms', 'r_164');
    $routes->route('POST', '/api/users/{userId:\d+}/rooms', 'r_165');
    $routes->route('GET', '/api/users/{userId:\d+}/rooms/{roomId:\d+}', 'r_166');
    $routes->route('PUT', '/api/users/{userId:\d+}/rooms/{roomId:\d+}', 'r_167');
    $routes->route('DELETE', '/api/users/{userId:\d+}/rooms/{roomId:\d+}', 'r_168');
    $routes->route('GET', '/api/users/{userId:\d+}/rooms/{roomId:\d+}/devices', 'r_169');
    $routes->route('POST', '/api/users/{userId:\d+}/rooms/{roomId:\d+}/devices', 'r_170');
    $routes->route('PUT', '/api/users/{userId:\d+}/rooms/{roomId:\d+}/devices/{deviceId:\d+}/status', 'r_171');
    $routes->route('GET', '/api/users/{userId:\d+}/devices/{deviceId:\d+}/metrics', 'r_172');
    $routes->route('GET', '/api/users/{userId:\d+}/devices/{deviceId:\d+}/reports/{reportType:daily|monthly|yearly}', 'r_173');
    $routes->route('GET', '/api/users/{userId:\d+}/notifications', 'r_174');
    $routes->route('POST', '/api/users/{userId:\d+}/notifications', 'r_175');
    $routes->route('GET', '/api/users/{userId:\d+}/notifications/{notificationId:\d+}', 'r_176');
    $routes->route('DELETE', '/api/users/{userId:\d+}/notifications/{notificationId:\d+}', 'r_177');
    $routes->route('GET', '/api/users/{userId:\d+}/scenarios', 'r_178');
    $routes->route('POST', '/api/users/{userId:\d+}/scenarios', 'r_179');
    $routes->route('GET', '/api/users/{userId:\d+}/scenarios/{scenarioId:\d+}', 'r_180');
    $routes->route('PUT', '/api/users/{userId:\d+}/scenarios/{scenarioId:\d+}', 'r_181');
    $routes->route('DELETE', '/api/users/{userId:\d+}/scenarios/{scenarioId:\d+}', 'r_182');
    $routes->route('POST', '/api/users/{userId:\d+}/voice_commands', 'r_183');
    $routes->route('GET', '/api/properties', 'r_184');
    $routes->route('POST', '/api/properties', 'r_185');
    $routes->route('GET', '/api/properties/{propertyId:\d+}', 'r_186');
    $routes->route('PUT', '/api/properties/{propertyId:\d+}', 'r_187');
    $routes->route('DELETE', '/api/properties/{propertyId:\d+}', 'r_188');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/rooms', 'r_189');
    $routes->route('POST', '/api/properties/{propertyId:\d+}/rooms', 'r_190');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}', 'r_191');
    $routes->route('PUT', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}', 'r_192');
    $routes->route('DELETE', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}', 'r_193');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}/bookings', 'r_194');
    $routes->route('POST', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}/bookings', 'r_195');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}/bookings/{bookingId:\d+}', 'r_196');
    $routes->route('PUT', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}/bookings/{bookingId:\d+}', 'r_197');
    $routes->route('DELETE', '/api/properties/{propertyId:\d+}/rooms/{roomId:\d+}/bookings/{bookingId:\d+}', 'r_198');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/reviews', 'r_199');
    $routes->route('POST', '/api/properties/{propertyId:\d+}/reviews', 'r_200');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/reviews/{reviewId:\d+}', 'r_201');
    $routes->route('PUT', '/api/properties/{propertyId:\d+}/reviews/{reviewId:\d+}', 'r_202');
    $routes->route('DELETE', '/api/properties/{propertyId:\d+}/reviews/{reviewId:\d+}', 'r_203');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/amenities', 'r_204');
    $routes->route('POST', '/api/properties/{propertyId:\d+}/amenities', 'r_205');
    $routes->route('GET', '/api/properties/{propertyId:\d+}/amenities/{amenityId:\d+}', 'r_206');
    $routes->route('PUT', '/api/properties/{propertyId:\d+}/amenities/{amenityId:\d+}', 'r_207');
    $routes->route('DELETE', '/api/properties/{propertyId:\d+}/amenities/{amenityId:\d+}', 'r_208');
    $routes->route('GET', '/api/users/{userId:\d+}/payments', 'r_209');
    $routes->route('POST', '/api/users/{userId:\d+}/payments', 'r_210');
    $routes->route('GET', '/api/users/{userId:\d+}/payments/{paymentId:\d+}', 'r_211');
    $routes->route('GET', '/api/v1/{lang:en|de}/schools/{schoolId:\d+}/classes/{classId:\d+}/students/{studentId:\d+}/grades/{subjectId:\d+}', 'r_212');
    $routes->route('POST', '/api/v2/{lang:en|de}/manufacturers/{manufacturerId:\d+}/products/{productId:\d+}/variants/{variantId:\d+}/reviews', 'r_213');
    $routes->route('GET', '/api/v1/hotels/{hotelId:\d+}/rooms/{type:single|double|suite}/{view:sea|mountain|city}', 'r_214');
    $routes->route('GET', '/api/locations/{latitude:-?\d+.\d+}/{longitude:-?\d+.\d+}/nearby_stores', 'r_215');
    $routes->route('GET', '/api/users/{userId:\d+}/feed/{year:\d{4}}/{month:\d{2}}/{day:\d{2}}', 'r_216');
    $routes->route('GET', '/api/reports/{reportId:\d+}/{startDate:\d{4}-\d{2}-\d{2}}/{endDate:\d{4}-\d{2}-\d{2}}', 'r_217');
    $routes->route('POST', '/api/users/{userId:\d+}/albums/{albumId:\d+}/photos/upload', 'r_218');
    $routes->route('POST', '/api/orders/{orderId:\d+}/payments/{paymentId:\d+}/confirmation', 'r_219');
    $routes->route('GET', '/admin/dashboard/{filter:daily|weekly|monthly}', 'r_220');
    $routes->route('POST', '/admin/products/{productId:\d+}/bulk-update', 'r_221');
    $routes->route('POST', '/api/workflow/{workflowId:\d+}/stages/{stageId:\d+}/tasks/{taskId:\d+}/subtasks/{subtaskId:\d+}/complete', 'r_222');

};
