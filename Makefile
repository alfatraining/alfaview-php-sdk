.PHONY: protoc docs setup

setup:
	@ -git clone -b add-php-namespace-option git@git.alfa.sx:alfatraining/proto.git proto
	@ cd proto ; git pull origin add-php-namespace-option ; cd -

protoc:
	@ echo "Compiling proto files..."
	@ mkdir -p src
	@ protoc --proto_path=proto --php_out='src' --grpc_out='src' --plugin=protoc-gen-grpc=bin/grpc_php_plugin authentication/accountStatus.proto
	@ protoc --proto_path=proto --php_out='src' --grpc_out='src' --plugin=protoc-gen-grpc=bin/grpc_php_plugin authentication/authenticationService.proto
	@ protoc --proto_path=proto --php_out='src' --grpc_out='src' --plugin=protoc-gen-grpc=bin/grpc_php_plugin common/accessInfo.proto common/accessToken.proto common/company.proto common/permissions.proto common/replyInfo.proto common/room.proto common/user.proto
	@ protoc --proto_path=proto --php_out='src' --grpc_out='src' --plugin=protoc-gen-grpc=bin/grpc_php_plugin companyService/companyService.proto
	@ protoc --proto_path=proto --php_out='src' --grpc_out='src' --plugin=protoc-gen-grpc=bin/grpc_php_plugin roomService/roomService.proto
	@ protoc --proto_path=proto --php_out='src' --grpc_out='src' --plugin=protoc-gen-grpc=bin/grpc_php_plugin user/userService.proto

docs:
	@ echo "Generating documentation..."
	@ sed -i 's/service roomService/service RoomService/' proto/roomService/roomService.proto
	docker run --rm -v $(shell pwd)/proto:/protos -v $(shell pwd)/docs:/out --entrypoint="" pseudomuto/protoc-gen-doc:latest sh -c "protoc -I/protos --doc_out=/out --doc_opt=html,index.html \
		/protos/authentication/accountStatus.proto /protos/authentication/authenticationService.proto \
		/protos/businessLogicService/businessLogicService.proto \
		/protos/common/accessInfo.proto /protos/common/accessToken.proto /protos/common/chat.proto \
		/protos/common/company.proto /protos/common/permissions.proto /protos/common/replyInfo.proto \
		/protos/common/room.proto /protos/common/user.proto \
		/protos/companyService/companyService.proto \
		/protos/roomService/roomService.proto \
		/protos/user/userService.proto"
	docker run --rm -v $(shell pwd)/proto:/protos -v $(shell pwd)/docs:/out --entrypoint="" pseudomuto/protoc-gen-doc:latest sh -c "protoc -I/protos --doc_out=/out --doc_opt=markdown,README.md \
		/protos/authentication/accountStatus.proto /protos/authentication/authenticationService.proto \
		/protos/businessLogicService/businessLogicService.proto \
		/protos/common/accessInfo.proto /protos/common/accessToken.proto /protos/common/chat.proto \
		/protos/common/company.proto /protos/common/permissions.proto /protos/common/replyInfo.proto \
		/protos/common/room.proto /protos/common/user.proto \
		/protos/companyService/companyService.proto \
		/protos/roomService/roomService.proto \
		/protos/user/userService.proto"
	@ sed -i 's/service RoomService/service roomService/' proto/roomService/roomService.proto
