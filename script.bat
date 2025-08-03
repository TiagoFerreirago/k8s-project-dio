echo "Create images ......"

docker build -t tiagoferreira97/message-house:1.1 backend/.
docker build -t tiagoferreira97/message-house-db:1.1 database/.

echo "Making the push of images ......"

docker push tiagoferreira97/message-house:1.1
docker push tiagoferreira97/message-house-db:1.1

echo "creating services in the cluster kubernetes."

kubectl apply -f ./services.yml

echo "creating deployments ....."

kubectl apply -f ./deployment.yml