.PHONY: protoc docs

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
	@ echo "Generating proto documentation..."
	@ protoc --proto_path=proto --doc_out=./docs --doc_opt=html,index.html proto/**/*.proto
	@ protoc --proto_path=proto --doc_out=./docs --doc_opt=markdown,README.md proto/**/*.proto
